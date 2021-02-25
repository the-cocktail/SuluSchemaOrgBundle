<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhpcrMigrations_MigratorFactoryService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'phpcr_migrations.migrator_factory' shared service.
     *
     * @return \PHPCR\Migrations\MigratorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['phpcr_migrations.migrator_factory'] = new \PHPCR\Migrations\MigratorFactory(($container->privates['phpcr_migrations.version_storage'] ?? $container->load('getPhpcrMigrations_VersionStorageService')), ($container->privates['phpcr_migrations.version_finder'] ?? $container->load('getPhpcrMigrations_VersionFinderService')), ($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()));
    }
}
