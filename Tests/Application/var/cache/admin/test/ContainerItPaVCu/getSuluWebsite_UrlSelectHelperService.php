<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_UrlSelectHelperService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_website.url_select_helper' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Admin\Helper\UrlSelect
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_website.url_select_helper'] = new \Sulu\Bundle\WebsiteBundle\Admin\Helper\UrlSelect(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), 'test');
    }
}
