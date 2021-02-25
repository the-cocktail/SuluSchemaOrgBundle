<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluHash_EventSubscriber_SerializerService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_hash.event_subscriber.serializer' shared service.
     *
     * @return \Sulu\Component\Hash\Serializer\Subscriber\HashSerializeEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_hash.event_subscriber.serializer'] = new \Sulu\Component\Hash\Serializer\Subscriber\HashSerializeEventSubscriber(($container->privates['sulu_hash.auditable_hasher'] ?? ($container->privates['sulu_hash.auditable_hasher'] = new \Sulu\Component\Hash\AuditableHasher())));
    }
}
