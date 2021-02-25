<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrinePhpcr_Admin_DefaultCredentialsService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine_phpcr.admin.default_credentials' shared service.
     *
     * @return \PHPCR\SimpleCredentials
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine_phpcr.admin.default_credentials'] = new \PHPCR\SimpleCredentials($container->getEnv('PHPCR_USERNAME'), $container->getEnv('PHPCR_PASSWORD'));
    }
}
