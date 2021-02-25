<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Document_Subscriber_Compat_ContentMapperService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.document.subscriber.compat.content_mapper' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\Compat\ContentMapperSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_document_manager.document.subscriber.compat.content_mapper'] = new \Sulu\Component\Content\Document\Subscriber\Compat\ContentMapperSubscriber(($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['sulu.content.mapper'] ?? $container->getSulu_Content_MapperService()), ($container->services['sulu.util.node_helper'] ?? $container->getSulu_Util_NodeHelperService()), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()));
    }
}
