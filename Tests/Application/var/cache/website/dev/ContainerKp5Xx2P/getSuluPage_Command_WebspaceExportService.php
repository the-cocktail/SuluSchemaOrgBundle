<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_WebspaceExportService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.webspace_export' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\WebspaceExportCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_page.command.webspace_export'] = $instance = new \Sulu\Bundle\PageBundle\Command\WebspaceExportCommand(($container->services['sulu_page.export.webspace'] ?? $container->load('getSuluPage_Export_WebspaceService')));

        $instance->setName('sulu:webspaces:export');

        return $instance;
    }
}
