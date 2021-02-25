<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('sulu_schema_org');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('image_format')->isRequired()->defaultValue("sulu-240x")->end()
            ->end()
            ->append($this->addExtensionsMapping())
            ->append($this->addOrganizationConfig())
        ;

        return $treeBuilder;
    }

    public function addOrganizationConfig()
    {
        $treeBuilder = new TreeBuilder('organization');

        $node = $treeBuilder->getRootNode()
            ->children()
                ->booleanNode('enabled')->defaultValue(false)->end()
                ->scalarNode('schema')->end()
                ->scalarNode('uid')->end()
            ->end()
        ;

        return $node;
    }

    public function addExtensionsMapping()
    {
        $treeBuilder = new TreeBuilder('extensions');

        $node = $treeBuilder->getRootNode()
            ->useAttributeAsKey('extension')
                ->arrayPrototype()
                ->useAttributeAsKey('schemas')
                    ->arrayPrototype()
                    ->useAttributeAsKey('fields')
                        ->arrayPrototype()
                            ->children()
                                ->scalarNode('property')->isRequired()->end()
                                ->scalarNode('type')->isRequired()->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
        ;

        return $node;
    }
}
