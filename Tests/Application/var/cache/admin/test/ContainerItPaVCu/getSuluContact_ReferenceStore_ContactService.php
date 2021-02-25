<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_ReferenceStore_ContactService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_contact.reference_store.contact' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_contact.reference_store.contact'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore();
    }
}
