<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_PublicAlias_SuluPage_Command_WorkspaceImportService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.sulu_page.command.workspace_import' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\WorkspaceImportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['console.command.public_alias.sulu_page.command.workspace_import'] = new \Sulu\Bundle\PageBundle\Command\WorkspaceImportCommand();
    }
}
