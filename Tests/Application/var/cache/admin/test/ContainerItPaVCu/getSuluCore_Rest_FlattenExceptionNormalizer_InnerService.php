<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluCore_Rest_FlattenExceptionNormalizer_InnerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_core.rest.flatten_exception_normalizer.inner' shared service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\FlattenExceptionNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_core.rest.flatten_exception_normalizer.inner'] = new \FOS\RestBundle\Serializer\Normalizer\FlattenExceptionNormalizer(($container->privates['fos_rest.exception.codes_map'] ?? $container->getFosRest_Exception_CodesMapService()), ($container->privates['fos_rest.exception.messages_map'] ?? ($container->privates['fos_rest.exception.messages_map'] = new \FOS\RestBundle\Util\ExceptionValueMap([]))), true, false);
    }
}
