<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRepositoryInitCommandService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Doctrine\Bundle\PHPCRBundle\Command\RepositoryInitCommand' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Command\RepositoryInitCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['console.command.public_alias.Doctrine\\Bundle\\PHPCRBundle\\Command\\RepositoryInitCommand'] = $instance = new \Doctrine\Bundle\PHPCRBundle\Command\RepositoryInitCommand();

        $instance->setContainer($container);

        return $instance;
    }
}
