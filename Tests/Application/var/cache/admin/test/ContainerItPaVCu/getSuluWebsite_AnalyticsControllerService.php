<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_AnalyticsControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_website.analytics_controller' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Controller\AnalyticsController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_website.analytics_controller'] = new \Sulu\Bundle\WebsiteBundle\Controller\AnalyticsController(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['sulu_website.analytics.manager'] ?? $container->load('getSuluWebsite_Analytics_ManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu_website.http_cache.clearer'] ?? $container->load('getSuluWebsite_HttpCache_ClearerService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
