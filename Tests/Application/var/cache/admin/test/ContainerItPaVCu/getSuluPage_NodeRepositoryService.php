<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_NodeRepositoryService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_page.node_repository' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Repository\NodeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_page.node_repository'] = new \Sulu\Bundle\PageBundle\Repository\NodeRepository(($container->services['sulu.content.mapper'] ?? $container->load('getSulu_Content_MapperService')), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu_security.user_manager'] ?? $container->load('getSuluSecurity_UserManagerService')), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->privates['sulu_page.smart_content.data_provider.content.query_builder'] ?? $container->load('getSuluPage_SmartContent_DataProvider_Content_QueryBuilderService')), ($container->privates['sulu.content.query_executor'] ?? $container->load('getSulu_Content_QueryExecutorService')), ($container->privates['sulu_security.access_control_manager'] ?? $container->getSuluSecurity_AccessControlManagerService()), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
