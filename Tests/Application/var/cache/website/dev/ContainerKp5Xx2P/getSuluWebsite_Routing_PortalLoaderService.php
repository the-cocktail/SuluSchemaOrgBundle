<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Routing_PortalLoaderService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.routing.portal_loader' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Routing\PortalLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_website.routing.portal_loader'] = new \Sulu\Bundle\WebsiteBundle\Routing\PortalLoader(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()));
    }
}
