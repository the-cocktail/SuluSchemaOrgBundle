<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSnippet_SmartContent_SnippetDataProviderService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_snippet.smart_content.snippet_data_provider' shared service.
     *
     * @return \Sulu\Bundle\SnippetBundle\Content\SnippetDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_snippet.smart_content.snippet_data_provider'] = new \Sulu\Bundle\SnippetBundle\Content\SnippetDataProvider(($container->privates['sulu.content.query_executor'] ?? $container->load('getSulu_Content_QueryExecutorService')), ($container->privates['sulu_snippet.smart_content.data_provider.query_builder'] ?? $container->load('getSuluSnippet_SmartContent_DataProvider_QueryBuilderService')), ($container->services['sulu.util.node_helper'] ?? $container->getSulu_Util_NodeHelperService()), ($container->privates['sulu_page.smart_content.data_provider.content.proxy_factory'] ?? $container->load('getSuluPage_SmartContent_DataProvider_Content_ProxyFactoryService')), ($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu_snippet.reference_store.snippet'] ?? ($container->services['sulu_snippet.reference_store.snippet'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), $container->hasParameter("sulu_audience_targeting.enabled"), ($container->privates['sulu_admin.form_metadata_provider'] ?? $container->load('getSuluAdmin_FormMetadataProviderService')), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
