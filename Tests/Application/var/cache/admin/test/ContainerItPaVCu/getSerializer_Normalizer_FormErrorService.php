<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_FormErrorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.form_error' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['serializer.normalizer.form_error'] = new \Symfony\Component\Serializer\Normalizer\FormErrorNormalizer();
    }
}
