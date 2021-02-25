<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_Suscriber_Behavior_LocaleService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.suscriber.behavior.locale' shared service.
     *
     * @return \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\LocaleSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_document_manager.suscriber.behavior.locale'] = new \Sulu\Component\DocumentManager\Subscriber\Behavior\Mapping\LocaleSubscriber(($container->privates['sulu_document_manager.document_registry'] ?? ($container->privates['sulu_document_manager.document_registry'] = new \Sulu\Component\DocumentManager\DocumentRegistry('en'))));
    }
}
