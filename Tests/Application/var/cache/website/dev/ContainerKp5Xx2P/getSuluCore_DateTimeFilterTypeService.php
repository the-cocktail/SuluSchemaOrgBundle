<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_DateTimeFilterTypeService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_core.date_time_filter_type' shared service.
     *
     * @return \Sulu\Component\Rest\ListBuilder\Filter\DateTimeFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_core.date_time_filter_type'] = new \Sulu\Component\Rest\ListBuilder\Filter\DateTimeFilterType();
    }
}
