<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Metadata_Provider_DefaultService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'massive_search.metadata.provider.default' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.metadata.provider.default'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\DefaultProvider(($container->privates['massive_search.metadata.factory'] ?? $container->load('getMassiveSearch_Metadata_FactoryService')));
    }
}
