<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class TransformerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->hasDefinition('sulu.schema_org.transformer_chain')) {
            return;
        }

        $definition = $container->findDefinition('sulu.schema_org.transformer_chain');
        $taggedServices = $container->findTaggedServiceIds('sulu.schema_org.transformer');

        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $tag) {
                $definition->addMethodCall('addTransformer', [$tag['alias'], new Reference($id)]);
            }
        }
    }
}
