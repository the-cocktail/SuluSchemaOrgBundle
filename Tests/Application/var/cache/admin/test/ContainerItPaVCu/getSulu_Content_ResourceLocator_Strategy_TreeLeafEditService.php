<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_ResourceLocator_Strategy_TreeLeafEditService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu.content.resource_locator.strategy.tree_leaf_edit' shared service.
     *
     * @return \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeLeafEditStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu.content.resource_locator.strategy.tree_leaf_edit'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeLeafEditStrategy(($container->privates['sulu.content.resource_locator.mapper.phpcr'] ?? $container->load('getSulu_Content_ResourceLocator_Mapper_PhpcrService')), ($container->services['sulu.content.path_cleaner'] ?? $container->getSulu_Content_PathCleanerService()), ($container->services['sulu.content.structure_manager'] ?? $container->getSulu_Content_StructureManagerService()), ($container->services['sulu.content.type_manager'] ?? $container->getSulu_Content_TypeManagerService()), ($container->services['sulu.util.node_helper'] ?? $container->getSulu_Util_NodeHelperService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->privates['sulu.content.resource_locator.strategy.tree_generator'] ?? ($container->privates['sulu.content.resource_locator.strategy.tree_generator'] = new \Sulu\Component\Content\Types\ResourceLocator\Strategy\TreeGenerator())));
    }
}
