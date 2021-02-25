<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Adapter_TestService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'massive_search.adapter.test' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['massive_search.adapter.test'] = new \Massive\Bundle\SearchBundle\Search\Adapter\TestAdapter(($container->privates['sulu_search.search.factory'] ?? ($container->privates['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory())));
    }
}
