<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_Analytics_ManagerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_website.analytics.manager' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Analytics\AnalyticsManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_website.analytics.manager'] = new \Sulu\Bundle\WebsiteBundle\Analytics\AnalyticsManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['sulu_website.analytics.repository'] ?? $container->load('getSuluWebsite_Analytics_RepositoryService')), ($container->privates['sulu_website.domains.repository'] ?? $container->load('getSuluWebsite_Domains_RepositoryService')), 'test');
    }
}
