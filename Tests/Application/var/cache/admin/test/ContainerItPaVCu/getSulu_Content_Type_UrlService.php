<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_UrlService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.url' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Content\Types\Url
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu.content.type.url'] = new \Sulu\Bundle\PageBundle\Content\Types\Url();
    }
}
