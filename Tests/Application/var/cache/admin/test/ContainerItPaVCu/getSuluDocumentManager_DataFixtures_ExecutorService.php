<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluDocumentManager_DataFixtures_ExecutorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_document_manager.data_fixtures.executor' shared service.
     *
     * @return \Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentExecutor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_document_manager.data_fixtures.executor'] = new \Sulu\Bundle\DocumentManagerBundle\DataFixtures\DocumentExecutor(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.initializer'] ?? $container->load('getSuluDocumentManager_InitializerService')));
    }
}
