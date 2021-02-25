<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_SearchManagerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'massive_search.search_manager' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\SearchManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['massive_search.object_to_document_converter'] ?? $container->load('getMassiveSearch_ObjectToDocumentConverterService'));

        if (isset($container->services['massive_search.search_manager'])) {
            return $container->services['massive_search.search_manager'];
        }

        return $container->services['massive_search.search_manager'] = new \Massive\Bundle\SearchBundle\Search\SearchManager(($container->services['massive_search.adapter.zend_lucene'] ?? $container->load('getMassiveSearch_Adapter_ZendLuceneService')), ($container->privates['massive_search.metadata.provider.chain'] ?? $container->load('getMassiveSearch_Metadata_Provider_ChainService')), $a, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->privates['massive_search.prefix_decorator'] ?? $container->load('getMassiveSearch_PrefixDecoratorService')), ($container->privates['massive_search.metadata.field_evaluator'] ?? $container->load('getMassiveSearch_Metadata_FieldEvaluatorService')));
    }
}
