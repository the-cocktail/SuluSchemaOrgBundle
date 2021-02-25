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

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class SuluSchemaOrgExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        if (array_key_exists('organization', $config)) {
            $container->setParameter('sulu.schema_org.config.organization', $config['organization']);
        }
        if (array_key_exists('extensions', $config)) {
            $container->setParameter('sulu.schema_org.config.extensions', $config['extensions']);
        }
        $container->setParameter('sulu.schema_org.config.image_format', $config['image_format']);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
        $loader->load('analyzers.xml');
        $loader->load('builders.xml');
        $loader->load('transformers.xml');

        if (!array_key_exists('organization', $config) || false === $config['organization']['enabled']) {
            $container->removeDefinition('sulu.schema_org.analyzer.organization');
            $container->removeDefinition('sulu.schema_org.organization_builder');
        }
    }
}
