<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Serializer_Subscriber_DocumentService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.serializer.subscriber.document' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_document_manager.serializer.subscriber.document'] = new \Sulu\Bundle\DocumentManagerBundle\Bridge\Serializer\Subscriber\DocumentSubscriber(($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))), ($container->privates['sulu_document_manager.node_manager'] ?? $container->getSuluDocumentManager_NodeManagerService()), ($container->privates['sulu_document_manager.metadata_factory'] ?? $container->getSuluDocumentManager_MetadataFactoryService()));
    }
}
