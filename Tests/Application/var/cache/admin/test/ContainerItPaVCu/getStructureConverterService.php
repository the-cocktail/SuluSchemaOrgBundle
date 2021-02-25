<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStructureConverterService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'Sulu\Bundle\SearchBundle\Search\Converter\StructureConverter' shared service.
     *
     * @return \Sulu\Bundle\SearchBundle\Search\Converter\StructureConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['massive_search.search_manager'] ?? $container->load('getMassiveSearch_SearchManagerService'));

        if (isset($container->privates['Sulu\\Bundle\\SearchBundle\\Search\\Converter\\StructureConverter'])) {
            return $container->privates['Sulu\\Bundle\\SearchBundle\\Search\\Converter\\StructureConverter'];
        }
        $b = ($container->privates['massive_search.object_to_document_converter'] ?? $container->load('getMassiveSearch_ObjectToDocumentConverterService'));

        if (isset($container->privates['Sulu\\Bundle\\SearchBundle\\Search\\Converter\\StructureConverter'])) {
            return $container->privates['Sulu\\Bundle\\SearchBundle\\Search\\Converter\\StructureConverter'];
        }

        return $container->privates['Sulu\\Bundle\\SearchBundle\\Search\\Converter\\StructureConverter'] = new \Sulu\Bundle\SearchBundle\Search\Converter\StructureConverter(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), $a, $b, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
