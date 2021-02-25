<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_ResourceLocator_Mapper_PhpcrService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu.content.resource_locator.mapper.phpcr' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Mapper\PhpcrMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu.content.resource_locator.mapper.phpcr'] = new \Sulu\Component\Content\Types\ResourceLocator\Mapper\PhpcrMapper(($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()));
    }
}
