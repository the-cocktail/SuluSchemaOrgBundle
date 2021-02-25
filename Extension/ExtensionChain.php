<?php

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Extension;

use Spatie\SchemaOrg\BaseType;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Extension\ExtensionInterface;

class ExtensionChain
{
    /**
     * @var ExtensionInterface[]
     */
    private array $extensions = [];

    public function addExtension(ExtensionInterface $extension): void
    {
        $this->extensions[] = $extension;
    }

    /**
     * @param BaseType $baseType
     * @param BaseType[] $defined
     * @return mixed
     */
    public function extend(BaseType $baseType, array $defined)
    {
        foreach ($this->extensions as $extension) {
            if (in_array(get_class($baseType), $extension->getTypes())) {
                $extension->extend($baseType, $defined);
            }
        }
    }
}
