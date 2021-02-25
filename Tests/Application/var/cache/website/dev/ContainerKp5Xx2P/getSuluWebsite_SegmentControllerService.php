<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_SegmentControllerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_website.segment_controller' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\Controller\SegmentController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_website.segment_controller'] = new \Sulu\Bundle\WebsiteBundle\Controller\SegmentController(($container->services['sulu_core.webspace.request_analyzer'] ?? $container->getSuluCore_Webspace_RequestAnalyzerService()), '_ss');
    }
}
