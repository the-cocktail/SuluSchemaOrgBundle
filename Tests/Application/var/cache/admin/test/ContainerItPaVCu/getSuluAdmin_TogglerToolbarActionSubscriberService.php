<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluAdmin_TogglerToolbarActionSubscriberService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_admin.toggler_toolbar_action_subscriber' shared service.
     *
     * @return \Sulu\Bundle\AdminBundle\Serializer\Subscriber\TogglerToolbarActionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_admin.toggler_toolbar_action_subscriber'] = new \Sulu\Bundle\AdminBundle\Serializer\Subscriber\TogglerToolbarActionSubscriber(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
