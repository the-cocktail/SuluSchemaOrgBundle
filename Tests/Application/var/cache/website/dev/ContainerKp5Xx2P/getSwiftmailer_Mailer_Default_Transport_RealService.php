<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_Mailer_Default_Transport_RealService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_NullTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['swiftmailer.mailer.default.transport.real'] = new \Swift_Transport_NullTransport(($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }
}
