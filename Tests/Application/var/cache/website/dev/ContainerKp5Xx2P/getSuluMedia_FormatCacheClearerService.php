<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_FormatCacheClearerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_media.format_cache_clearer' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Media\FormatCache\FormatCacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_media.format_cache_clearer'] = $instance = new \Sulu\Bundle\MediaBundle\Media\FormatCache\FormatCacheClearer();

        $instance->add(($container->services['sulu_media.format_cache'] ?? $container->getSuluMedia_FormatCacheService()), 'local');

        return $instance;
    }
}
