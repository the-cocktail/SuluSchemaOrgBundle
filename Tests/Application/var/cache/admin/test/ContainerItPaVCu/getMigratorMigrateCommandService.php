<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMigratorMigrateCommandService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Doctrine\Bundle\PHPCRBundle\Command\MigratorMigrateCommand' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Command\MigratorMigrateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['console.command.public_alias.Doctrine\\Bundle\\PHPCRBundle\\Command\\MigratorMigrateCommand'] = $instance = new \Doctrine\Bundle\PHPCRBundle\Command\MigratorMigrateCommand();

        $instance->setContainer($container);

        return $instance;
    }
}
