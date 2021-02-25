<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_DefaultLocale_PortalProviderService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.default_locale.portal_provider' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_website.default_locale.portal_provider'] = new \Sulu\Bundle\WebsiteBundle\Locale\PortalDefaultLocaleProvider(($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()));
    }
}
