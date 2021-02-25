<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_DataUriService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.data_uri' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DataUriNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['serializer.normalizer.data_uri'] = new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($container->privates['mime_types'] ?? $container->load('getMimeTypesService')));
    }
}
