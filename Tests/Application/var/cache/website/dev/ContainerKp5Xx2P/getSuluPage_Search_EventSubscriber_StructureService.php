<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Search_EventSubscriber_StructureService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.search.event_subscriber.structure' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Search\EventSubscriber\StructureSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_page.search.event_subscriber.structure'] = new \Sulu\Bundle\PageBundle\Search\EventSubscriber\StructureSubscriber(($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService')));
    }
}
