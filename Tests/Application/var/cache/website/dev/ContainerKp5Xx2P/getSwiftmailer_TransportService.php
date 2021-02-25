<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwiftmailer_TransportService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($container->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), ($container->privates['swiftmailer.mailer.default.spool.memory'] ?? ($container->privates['swiftmailer.mailer.default.spool.memory'] = new \Swift_MemorySpool())));

        $instance->registerPlugin(($container->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($container->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));
        $instance->registerPlugin(($container->privates['sulu_markup.swift_mailer_listener'] ?? $container->load('getSuluMarkup_SwiftMailerListenerService')));

        return $instance;
    }
}
