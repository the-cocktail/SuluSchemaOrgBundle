<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkspaceListCommandService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Doctrine\Bundle\PHPCRBundle\Command\WorkspaceListCommand' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Command\WorkspaceListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.Doctrine\\Bundle\\PHPCRBundle\\Command\\WorkspaceListCommand'] = new \Doctrine\Bundle\PHPCRBundle\Command\WorkspaceListCommand();
    }
}
