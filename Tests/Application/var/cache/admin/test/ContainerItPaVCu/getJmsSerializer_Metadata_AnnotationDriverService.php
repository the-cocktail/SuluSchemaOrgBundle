<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_AnnotationDriverService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.annotation_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\AnnotationDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['jms_serializer.metadata.annotation_driver'] = new \JMS\Serializer\Metadata\Driver\AnnotationDriver(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), ($container->privates['jms_serializer.identical_property_naming_strategy'] ?? ($container->privates['jms_serializer.identical_property_naming_strategy'] = new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
