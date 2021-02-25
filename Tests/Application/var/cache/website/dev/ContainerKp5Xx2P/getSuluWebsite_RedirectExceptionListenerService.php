<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_RedirectExceptionListenerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_website.redirect_exception_listener' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\EventListener\RedirectExceptionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_website.redirect_exception_listener'] = new \Sulu\Bundle\WebsiteBundle\EventListener\RedirectExceptionSubscriber(($container->services['router'] ?? $container->getRouterService()), ($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()), ($container->privates['sulu_website.default_locale.portal_provider'] ?? $container->load('getSuluWebsite_DefaultLocale_PortalProviderService')), ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] ?? ($container->privates['sulu_core.webspace.webspace_manager.url_replacer'] = new \Sulu\Component\Webspace\Url\Replacer())));
    }
}
