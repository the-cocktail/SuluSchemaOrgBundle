<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Twig_NavigationService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_website.twig.navigation' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_website.twig.navigation'] = new \Sulu\Bundle\WebsiteBundle\Twig\Navigation\NavigationTwigExtension(($container->services['sulu.content.mapper'] ?? $container->load('getSulu_Content_MapperService')), ($container->privates['sulu_website.navigation_mapper'] ?? $container->load('getSuluWebsite_NavigationMapperService')), ($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()));
    }
}
