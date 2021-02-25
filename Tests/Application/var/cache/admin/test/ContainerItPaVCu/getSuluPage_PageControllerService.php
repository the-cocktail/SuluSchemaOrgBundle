<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_PageControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_page.page_controller' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Controller\PageController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_page.page_controller'] = new \Sulu\Bundle\PageBundle\Controller\PageController(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu.content.mapper'] ?? $container->load('getSulu_Content_MapperService')), ($container->services['sulu_page.content_repository'] ?? $container->getSuluPage_ContentRepositoryService()), ($container->services['sulu_hash.request_hash_checker'] ?? $container->load('getSuluHash_RequestHashCheckerService')), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu_page.node_repository'] ?? $container->load('getSuluPage_NodeRepositoryService')), ($container->services['sulu_document_manager.metadata_factory.base'] ?? $container->getSuluDocumentManager_MetadataFactory_BaseService()), ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')));
    }
}
