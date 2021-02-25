<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluMedia_MediaStreamControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_media.media_stream_controller' shared service.
     *
     * @return \Sulu\Bundle\MediaBundle\Controller\MediaStreamController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_media.media_stream_controller'] = new \Sulu\Bundle\MediaBundle\Controller\MediaStreamController(($container->services['sulu_media.disposition_type.resolver'] ?? ($container->services['sulu_media.disposition_type.resolver'] = new \Sulu\Bundle\MediaBundle\Media\DispositionType\DispositionTypeResolver('attachment', [], []))), ($container->services['sulu.repository.media'] ?? $container->getSulu_Repository_MediaService()), ($container->services['sulu.content.path_cleaner'] ?? $container->getSulu_Content_PathCleanerService()), ($container->services['sulu_media.format_manager'] ?? $container->getSuluMedia_FormatManagerService()), ($container->services['sulu_media.format_cache'] ?? $container->getSuluMedia_FormatCacheService()), ($container->services['sulu_media.media_manager'] ?? $container->getSuluMedia_MediaManagerService()), ($container->services['sulu_media.storage'] ?? $container->getSuluMedia_StorageService()), ($container->services['sulu_security.security_checker'] ?? $container->getSuluSecurity_SecurityCheckerService()));
    }
}
