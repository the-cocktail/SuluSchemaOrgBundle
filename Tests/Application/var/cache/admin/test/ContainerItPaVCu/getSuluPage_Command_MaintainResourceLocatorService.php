<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_MaintainResourceLocatorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.maintain_resource_locator' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\MaintainResourceLocatorCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_page.command.maintain_resource_locator'] = $instance = new \Sulu\Bundle\PageBundle\Command\MaintainResourceLocatorCommand(($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu_document_manager.live_session'] ?? $container->load('getSuluDocumentManager_LiveSessionService')), ($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()), ($container->services['sulu_page.structure.factory'] ?? $container->getSuluPage_Structure_FactoryService()), ($container->services['sulu_document_manager.property_encoder'] ?? $container->getSuluDocumentManager_PropertyEncoderService()));

        $instance->setName('sulu:content:resource-locator:maintain');

        return $instance;
    }
}
