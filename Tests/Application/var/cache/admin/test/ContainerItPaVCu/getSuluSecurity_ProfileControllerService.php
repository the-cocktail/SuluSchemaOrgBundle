<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_ProfileControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_security.profile_controller' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Controller\ProfileController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_security.profile_controller'] = new \Sulu\Bundle\SecurityBundle\Controller\ProfileController(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['sulu_security.user_setting_repository'] ?? $container->load('getSuluSecurity_UserSettingRepositoryService')), ($container->services['sulu_security.user_manager'] ?? $container->load('getSuluSecurity_UserManagerService')), 'Sulu\\Bundle\\SecurityBundle\\Entity\\User', 'Sulu\\Bundle\\ContactBundle\\Entity\\Contact');
    }
}
