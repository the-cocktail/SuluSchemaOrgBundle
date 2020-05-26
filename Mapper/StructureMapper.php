<?php

declare(strict_types=1);

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Mapper;

use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use Spatie\SchemaOrg\Schema;
use Sulu\Component\Content\Compat\Structure\StructureBridge;
use Sulu\Component\Content\Compat\StructureInterface;
use Sulu\Component\Content\Document\Behavior\LocalizedAuthorBehavior;
use Sulu\Component\Content\Document\Behavior\WorkflowStageBehavior;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Analyzer\SchemaOrgAnalyzerInterface;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Exception\SchemaException;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Exception\SchemaTypeNotFound;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Exception\SchemaTypeNotImplemented;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Mapper\PropertyMapper;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Model\SchemaModel;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Transformer\TransformerChain;

class StructureMapper
{
    private PropertyMapper $propertyMapper;
    private TransformerChain $transformerChain;
    private array $config;

    public function __construct(
        PropertyMapper $propertyMapper,
        TransformerChain $transformerChain,
        array $config
    ) {
        $this->propertyMapper = $propertyMapper;
        $this->transformerChain = $transformerChain;
        $this->config = $config;
    }
    
    public function parseStructure(StructureInterface $structure): ?BaseType
    {
        if (!$model = $this->getSchemaModel($structure)) {
            return null;
        }
        $properties = $structure->getProperties(true);
        $this->parseModel($model, $structure, $properties);

        return $model->buildSchema();
    }

    private function parseModel(SchemaModel $model, StructureInterface $structure, array $properties): void
    {
        $this->propertyMapper->parseProperties($properties, $model);

        if ($structure instanceof StructureBridge) {
            $extensions = $structure->getExt()->toArray();

            if ($model->isMaster()) {
                foreach ($this->config as $ext => $mapping) {
                    $extensionData = $extensions[$ext];
                    if ($mapping = $mapping[$model->getSchemaType()] ?? ($mapping['default'] ?? null)) {
                        $this->extensionMapping($model, $mapping, $extensionData);
                    }
                }
                $this->creativeEnhancer($model, $structure);
            }
        }
        foreach ($model->getChildren() as $child) {
            $this->parseModel($child, $structure, $properties);
        }
    }

    private function getSchemaModel(StructureInterface $structure): ?SchemaModel
    {
        if (!$structure instanceof StructureBridge) {
            return null;
        }

        $metadata = $structure->getStructure();
        /** @var SchemaModel[] $defined */
        $defined = [];
        foreach ($metadata->getTags() as $tag) {
            if ($tag['name'] !== SchemaOrgAnalyzerInterface::TAG) {
                continue;
            }

            $type = $tag['attributes']['itemtype'] ?? null;
            $itemscope = $tag['attributes']['itemscope'] ?? null;
            $itemprop = $tag['attributes']['itemprop'] ?? null;

            if (!$type) {
                throw new SchemaTypeNotFound(sprintf("Property 'itemtype' not found in %s", $metadata->getName()));
            }

            if (!method_exists(Schema::class, $type)) {
                throw new SchemaTypeNotImplemented(sprintf('Schema %1$s not implemented, check https://schema.org/%1$s', $type));
            }

            $model = new SchemaModel($type);
            $model->setMaster(empty($defined));
            $defined[$type] = $model;

            if ($itemscope && $itemprop && (array_key_exists($itemscope, $defined))) {
                $defined[$itemscope]->addChild($model, $itemprop);
            }
        }
        return empty($defined) ? null: reset($defined);
    }

    private function creativeEnhancer(SchemaModel $model, StructureBridge $structure): void
    {
        $partial = $model->buildSchema();
        if (!$partial instanceof CreativeWorkContract) {
            return;
        }
        $document = $structure->getDocument();
        if ($document instanceof WorkflowStageBehavior && ($date = $document->getPublished())) {
            $model->setProperty('datePublished', $date->format('c'));
        }
    }

    private function extensionMapping(SchemaModel $model, array $mapping, array $extensionData): void
    {
        foreach ($mapping as $field => $data) {
            $property = $data['property'];
            $value = $extensionData[$field];
            $value = $this->transformerChain->transform($data['type'], $value);
            $model->setProperty($property, $value);
        }
    }
}
