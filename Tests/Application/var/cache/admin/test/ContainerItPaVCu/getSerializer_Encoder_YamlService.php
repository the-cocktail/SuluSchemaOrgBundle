<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Encoder_YamlService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.encoder.yaml' shared service.
     *
     * @return \Symfony\Component\Serializer\Encoder\YamlEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['serializer.encoder.yaml'] = new \Symfony\Component\Serializer\Encoder\YamlEncoder();
    }
}
