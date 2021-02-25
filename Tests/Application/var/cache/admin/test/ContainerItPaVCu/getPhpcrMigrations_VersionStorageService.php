<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhpcrMigrations_VersionStorageService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'phpcr_migrations.version_storage' shared service.
     *
     * @return \PHPCR\Migrations\VersionStorage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['phpcr_migrations.version_storage'] = new \PHPCR\Migrations\VersionStorage(($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), 'jcr:versions');
    }
}
