<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Metadata_Provider_ChainService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'massive_search.metadata.provider.chain' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\Provider\ChainProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.metadata.provider.chain'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Provider\ChainProvider([0 => ($container->privates['massive_search.metadata.provider.default'] ?? $container->load('getMassiveSearch_Metadata_Provider_DefaultService')), 1 => ($container->privates['sulu_page.search.metadata.provider.structure'] ?? $container->load('getSuluPage_Search_Metadata_Provider_StructureService'))]);
    }
}
