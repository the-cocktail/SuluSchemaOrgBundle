<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Resolver_RequestAnalyzerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.resolver.request_analyzer' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Resolver\RequestAnalyzerResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_website.resolver.request_analyzer'] = new \Sulu\Bundle\WebsiteBundle\Resolver\RequestAnalyzerResolver(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), 'dev');
    }
}
