<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluWebsite_ReferenceStorePoolService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_website.reference_store_pool' shared service.
     *
     * @return \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStorePool
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_website.reference_store_pool'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStorePool(['content' => ($container->privates['sulu_page.reference_store.content'] ?? ($container->privates['sulu_page.reference_store.content'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), 'contact' => ($container->privates['sulu_contact.reference_store.contact'] ?? ($container->privates['sulu_contact.reference_store.contact'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), 'account' => ($container->privates['sulu_contact.reference_store.account'] ?? ($container->privates['sulu_contact.reference_store.account'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), 'tag' => ($container->privates['sulu_tag.reference_store.tag'] ?? ($container->privates['sulu_tag.reference_store.tag'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), 'media' => ($container->privates['sulu_media.reference_store.media'] ?? ($container->privates['sulu_media.reference_store.media'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), 'category' => ($container->privates['sulu_category.reference_store.category'] ?? ($container->privates['sulu_category.reference_store.category'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore())), 'snippet' => ($container->services['sulu_snippet.reference_store.snippet'] ?? ($container->services['sulu_snippet.reference_store.snippet'] = new \Sulu\Bundle\WebsiteBundle\ReferenceStore\ReferenceStore()))]);
    }
}
