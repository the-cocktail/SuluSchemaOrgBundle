<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_IndexNameDecoratorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'massive_search.index_name_decorator' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Decorator\IndexNameDecorator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.index_name_decorator'] = new \Massive\Bundle\SearchBundle\Search\Decorator\IndexNameDecorator(($container->privates['massive_search.metadata.field_evaluator'] ?? $container->load('getMassiveSearch_Metadata_FieldEvaluatorService')));
    }
}
