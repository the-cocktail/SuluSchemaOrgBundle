<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotations_CacheService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['annotations.cache'] = new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($container->targetDir.''.'/annotations.php'), ($container->privates['cache.annotations'] ?? $container->load('getCache_AnnotationsService'))));
    }
}
