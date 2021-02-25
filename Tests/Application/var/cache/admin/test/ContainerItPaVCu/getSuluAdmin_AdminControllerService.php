<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_AdminControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_admin.admin_controller' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Controller\AdminController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_admin.admin_controller'] = new \Sulu\Bundle\AdminBundle\Controller\AdminController(($container->services['router'] ?? $container->getRouterService()), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['sulu_admin.admin_pool'] ?? $container->load('getSuluAdmin_AdminPoolService')), ($container->services['jms_serializer'] ?? $container->load('getJmsSerializerService')), ($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['sulu_admin.metadata_provider_registry'] ?? $container->load('getSuluAdmin_MetadataProviderRegistryService')), ($container->privates['sulu_admin.view_registry'] ?? $container->load('getSuluAdmin_ViewRegistryService')), ($container->privates['sulu_admin.navigation_registry'] ?? $container->load('getSuluAdmin_NavigationRegistryService')), ($container->privates['sulu_admin.field_type_option_registry'] ?? $container->load('getSuluAdmin_FieldTypeOptionRegistryService')), ($container->services['sulu_contact.contact_manager'] ?? $container->load('getSuluContact_ContactManagerService')), ($container->services['sulu_page.smart_content.data_provider_pool'] ?? $container->load('getSuluPage_SmartContent_DataProviderPoolService')), ($container->privates['sulu_markup.link_tag.provider_pool'] ?? $container->getSuluMarkup_LinkTag_ProviderPoolService()), ($container->services['sulu.core.localization_manager'] ?? $container->load('getSulu_Core_LocalizationManagerService')), 'test', '_._._', NULL, $container->parameters['sulu_admin.resources'], $container->parameters['sulu_core.locales'], $container->parameters['sulu_core.translations'], 'en', 20);
    }
}
