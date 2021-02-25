<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_TimeService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.time' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Content\Types\Time
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu.content.type.time'] = new \Sulu\Bundle\PageBundle\Content\Types\Time();
    }
}
