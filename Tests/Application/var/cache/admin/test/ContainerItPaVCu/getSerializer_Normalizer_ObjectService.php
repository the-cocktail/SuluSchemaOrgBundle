<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_ObjectService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.object' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\ObjectNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['serializer.normalizer.object'] = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(($container->privates['serializer.mapping.cache_class_metadata_factory'] ?? $container->load('getSerializer_Mapping_CacheClassMetadataFactoryService')), ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->load('getSerializer_NameConverter_MetadataAwareService')), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ($container->privates['property_info'] ?? $container->load('getPropertyInfoService')), ($container->privates['serializer.mapping.class_discriminator_resolver'] ?? $container->load('getSerializer_Mapping_ClassDiscriminatorResolverService')), NULL, []);
    }
}
