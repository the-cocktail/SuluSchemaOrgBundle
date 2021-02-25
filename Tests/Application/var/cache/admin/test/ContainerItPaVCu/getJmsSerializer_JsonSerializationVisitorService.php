<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_JsonSerializationVisitorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();

        $instance->setOptions(1024);

        return $instance;
    }
}
