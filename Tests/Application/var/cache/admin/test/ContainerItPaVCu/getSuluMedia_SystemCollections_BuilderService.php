<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_SystemCollections_BuilderService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_media.system_collections.builder' shared service.
     *
     * @return \Sulu\Component\Media\SystemCollections\SystemCollectionBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_media.system_collections.builder'] = new \Sulu\Component\Media\SystemCollections\SystemCollectionBuilder();
    }
}
