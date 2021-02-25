<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Teaser_ProviderPoolService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_page.teaser.provider_pool' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Teaser\Provider\TeaserProviderPool
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_page.teaser.provider_pool'] = new \Sulu\Bundle\PageBundle\Teaser\Provider\TeaserProviderPool(['pages' => ($container->privates['sulu_page.teaser.provider.content'] ?? $container->load('getSuluPage_Teaser_Provider_ContentService'))]);
    }
}
