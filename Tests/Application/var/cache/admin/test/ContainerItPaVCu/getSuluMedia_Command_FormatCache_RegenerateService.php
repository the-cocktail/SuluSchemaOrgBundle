<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_Command_FormatCache_RegenerateService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_media.command.format_cache.regenerate' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Command\FormatCacheRegenerateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_media.command.format_cache.regenerate'] = $instance = new \Sulu\Bundle\MediaBundle\Command\FormatCacheRegenerateCommand(($container->services['.container.private.filesystem'] ?? ($container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($container->services['sulu_media.format_manager'] ?? $container->getSuluMedia_FormatManagerService()), (\dirname(__DIR__, 5).'/public/uploads/media'));

        $instance->setName('sulu:media:regenerate-formats');

        return $instance;
    }
}
