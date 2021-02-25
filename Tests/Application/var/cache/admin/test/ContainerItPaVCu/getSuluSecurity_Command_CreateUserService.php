<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_Command_CreateUserService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_security.command.create_user' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Command\CreateUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_security.command.create_user'] = $instance = new \Sulu\Bundle\SecurityBundle\Command\CreateUserCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu.repository.user'] ?? $container->getSulu_Repository_UserService()), ($container->services['sulu.repository.role'] ?? $container->getSulu_Repository_RoleService()), ($container->services['sulu.repository.contact'] ?? $container->load('getSulu_Repository_ContactService')), ($container->services['sulu.core.localization_manager'] ?? $container->load('getSulu_Core_LocalizationManagerService')), ($container->services['sulu_security.salt_generator'] ?? ($container->services['sulu_security.salt_generator'] = new \Sulu\Component\Security\Authentication\SaltGenerator())), ($container->services['sulu_security.encoder_factory'] ?? $container->load('getSuluSecurity_EncoderFactoryService')), $container->parameters['sulu_core.locales']);

        $instance->setName('sulu:security:user:create');

        return $instance;
    }
}
