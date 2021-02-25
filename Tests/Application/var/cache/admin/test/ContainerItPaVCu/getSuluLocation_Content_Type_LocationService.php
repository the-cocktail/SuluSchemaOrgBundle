<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluLocation_Content_Type_LocationService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_location.content.type.location' shared service.
     *
     * @return \Sulu\Bundle\LocationBundle\Content\Types\LocationContentType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_location.content.type.location'] = new \Sulu\Bundle\LocationBundle\Content\Types\LocationContentType();
    }
}
