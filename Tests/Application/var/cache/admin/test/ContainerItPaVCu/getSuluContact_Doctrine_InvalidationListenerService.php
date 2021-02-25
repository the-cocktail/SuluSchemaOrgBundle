<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Doctrine_InvalidationListenerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_contact.doctrine.invalidation_listener' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\EventListener\CacheInvalidationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_contact.doctrine.invalidation_listener'] = new \Sulu\Bundle\ContactBundle\EventListener\CacheInvalidationListener(NULL);
    }
}
