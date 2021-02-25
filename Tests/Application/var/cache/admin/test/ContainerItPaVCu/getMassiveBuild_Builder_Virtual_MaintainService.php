<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveBuild_Builder_Virtual_MaintainService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'massive_build.builder.virtual.maintain' shared service.
     *
     * @return \Massive\Bundle\BuildBundle\Builder\VirtualBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_build.builder.virtual.maintain'] = new \Massive\Bundle\BuildBundle\Builder\VirtualBuilder('maintain', [0 => 'node_order', 1 => 'search_index', 2 => 'phpcr_migrations']);
    }
}
