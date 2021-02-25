<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_Rest_FlattenExceptionNormalizerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_core.rest.flatten_exception_normalizer' shared service.
     *
     * @return \Sulu\Component\Rest\FlattenExceptionNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_core.rest.flatten_exception_normalizer'] = new \Sulu\Component\Rest\FlattenExceptionNormalizer(($container->privates['sulu_core.rest.flatten_exception_normalizer.inner'] ?? $container->load('getSuluCore_Rest_FlattenExceptionNormalizer_InnerService')), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
