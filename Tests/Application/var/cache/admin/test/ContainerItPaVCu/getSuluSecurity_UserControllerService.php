<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_UserControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_security.user_controller' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Controller\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_security.user_controller'] = new \Sulu\Bundle\SecurityBundle\Controller\UserController(($container->services['fos_rest.view_handler'] ?? $container->load('getFosRest_ViewHandlerService')), ($container->services['sulu_core.doctrine_rest_helper'] ?? $container->load('getSuluCore_DoctrineRestHelperService')), ($container->services['sulu_core.doctrine_list_builder_factory'] ?? $container->load('getSuluCore_DoctrineListBuilderFactoryService')), ($container->services['sulu_security.user_manager'] ?? $container->load('getSuluSecurity_UserManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), 'Sulu\\Bundle\\SecurityBundle\\Entity\\User');
    }
}
