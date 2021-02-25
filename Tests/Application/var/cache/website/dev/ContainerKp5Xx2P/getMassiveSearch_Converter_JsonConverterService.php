<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Converter_JsonConverterService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'massive_search.converter.json_converter' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Converter\Types\JsonConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.converter.json_converter'] = new \Massive\Bundle\SearchBundle\Search\Converter\Types\JsonConverter();
    }
}
