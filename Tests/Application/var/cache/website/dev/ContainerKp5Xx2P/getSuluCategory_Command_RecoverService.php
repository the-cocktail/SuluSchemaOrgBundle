<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCategory_Command_RecoverService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_category.command.recover' shared service.
     *
     * @return \Sulu\Bundle\CategoryBundle\Command\RecoverCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_category.command.recover'] = $instance = new \Sulu\Bundle\CategoryBundle\Command\RecoverCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['sulu.repository.category'] ?? $container->getSulu_Repository_CategoryService()));

        $instance->setName('sulu:categories:recover');

        return $instance;
    }
}
