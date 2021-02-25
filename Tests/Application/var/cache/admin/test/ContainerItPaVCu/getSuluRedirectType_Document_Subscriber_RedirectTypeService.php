<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluRedirectType_Document_Subscriber_RedirectTypeService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_redirect_type.document.subscriber.redirect_type' shared service.
     *
     * @return \Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_redirect_type.document.subscriber.redirect_type'] = new \Sulu\Component\Content\Document\Subscriber\RedirectTypeSubscriber();
    }
}
