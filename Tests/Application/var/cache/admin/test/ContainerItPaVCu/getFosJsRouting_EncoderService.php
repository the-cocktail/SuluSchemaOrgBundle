<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_EncoderService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'fos_js_routing.encoder' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\JsonEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_js_routing.encoder'] = new \Symfony\Component\Serializer\Encoder\JsonEncoder();
    }
}
