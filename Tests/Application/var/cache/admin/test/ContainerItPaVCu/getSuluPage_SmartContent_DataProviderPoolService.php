<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_SmartContent_DataProviderPoolService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_page.smart_content.data_provider_pool' shared service.
     *
     * @return \Sulu\Component\SmartContent\DataProviderPool
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['sulu_page.smart_content.data_provider_pool'] = $instance = new \Sulu\Component\SmartContent\DataProviderPool();

        $instance->add('pages', ($container->privates['sulu_page.smart_content.data_provider.content'] ?? $container->load('getSuluPage_SmartContent_DataProvider_ContentService')));
        $instance->add('contacts', ($container->privates['sulu_contact.smart_content.data_provider.contact'] ?? $container->load('getSuluContact_SmartContent_DataProvider_ContactService')));
        $instance->add('accounts', ($container->privates['sulu_contact.smart_content.data_provider.account'] ?? $container->load('getSuluContact_SmartContent_DataProvider_AccountService')));
        $instance->add('media', ($container->privates['sulu_media.smart_content.data_provider.media'] ?? $container->load('getSuluMedia_SmartContent_DataProvider_MediaService')));
        $instance->add('snippets', ($container->privates['sulu_snippet.smart_content.snippet_data_provider'] ?? $container->load('getSuluSnippet_SmartContent_SnippetDataProviderService')));

        return $instance;
    }
}
