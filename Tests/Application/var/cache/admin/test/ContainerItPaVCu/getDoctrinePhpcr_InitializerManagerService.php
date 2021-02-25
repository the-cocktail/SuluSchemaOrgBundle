<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrinePhpcr_InitializerManagerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'doctrine_phpcr.initializer_manager' shared service.
     *
     * @return \Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['doctrine_phpcr.initializer_manager'] = new \Doctrine\Bundle\PHPCRBundle\Initializer\InitializerManager(($container->services['doctrine_phpcr'] ?? $container->load('getDoctrinePhpcrService')));
    }
}
