<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSearch_Build_IndexService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_search.build.index' shared service.
     *
     * @return \Sulu\Bundle\SearchBundle\Build\IndexBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_search.build.index'] = new \Sulu\Bundle\SearchBundle\Build\IndexBuilder();
    }
}
