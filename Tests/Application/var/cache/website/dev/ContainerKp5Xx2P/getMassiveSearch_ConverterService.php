<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_ConverterService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'massive_search.converter' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Converter\ConverterManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['massive_search.converter'] = $instance = new \Massive\Bundle\SearchBundle\Search\Converter\ConverterManager();

        $instance->addConverter('date', ($container->privates['massive_search.converter.date_converter'] ?? ($container->privates['massive_search.converter.date_converter'] = new \Massive\Bundle\SearchBundle\Search\Converter\Types\DateConverter())));
        $instance->addConverter('json', ($container->privates['massive_search.converter.json_converter'] ?? ($container->privates['massive_search.converter.json_converter'] = new \Massive\Bundle\SearchBundle\Search\Converter\Types\JsonConverter())));
        $instance->addConverter('structure', ($container->privates['Sulu\\Bundle\\SearchBundle\\Search\\Converter\\StructureConverter'] ?? $container->load('getStructureConverterService')));
        $instance->addConverter('tags', ($container->privates['sulu_tag.search.tags_converter'] ?? $container->load('getSuluTag_Search_TagsConverterService')));
        $instance->addConverter('category', ($container->privates['Sulu\\Bundle\\CategoryBundle\\Search\\Converter\\CategoryConverter'] ?? $container->load('getCategoryConverterService')));

        return $instance;
    }
}
