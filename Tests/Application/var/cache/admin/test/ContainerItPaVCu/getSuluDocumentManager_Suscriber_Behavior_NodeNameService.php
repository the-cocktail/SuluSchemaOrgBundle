<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Suscriber_Behavior_NodeNameService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.suscriber.behavior.node_name' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_document_manager.suscriber.behavior.node_name'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\NodeNameSubscriber();
    }
}
