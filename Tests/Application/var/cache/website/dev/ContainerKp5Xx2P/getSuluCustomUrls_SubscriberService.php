<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCustomUrls_SubscriberService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_custom_urls.subscriber' shared service.
     *
     * @return \Sulu\Component\CustomUrl\Document\Subscriber\CustomUrlSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_custom_urls.subscriber'] = new \Sulu\Component\CustomUrl\Document\Subscriber\CustomUrlSubscriber(($container->privates['sulu_custom_urls.domain_generator'] ?? $container->getSuluCustomUrls_DomainGeneratorService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->privates['sulu_document_manager.path_builder'] ?? $container->getSuluDocumentManager_PathBuilderService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_core.webspace.webspace_manager'] ?? $container->getSuluCore_Webspace_WebspaceManagerService()));
    }
}
