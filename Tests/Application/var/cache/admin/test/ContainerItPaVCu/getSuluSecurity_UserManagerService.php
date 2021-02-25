<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_UserManagerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_security.user_manager' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\UserManager\UserManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_security.user_manager'] = new \Sulu\Bundle\SecurityBundle\UserManager\UserManager(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu_security.encoder_factory'] ?? $container->load('getSuluSecurity_EncoderFactoryService')), ($container->services['sulu.repository.role'] ?? $container->getSulu_Repository_RoleService()), ($container->privates['sulu_security.group_repository'] ?? $container->load('getSuluSecurity_GroupRepositoryService')), ($container->services['sulu_contact.contact_manager'] ?? $container->load('getSuluContact_ContactManagerService')), ($container->services['sulu_security.salt_generator'] ?? ($container->services['sulu_security.salt_generator'] = new \Sulu\Component\Security\Authentication\SaltGenerator())), ($container->services['sulu.repository.user'] ?? $container->getSulu_Repository_UserService()));
    }
}
