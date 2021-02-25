<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_Fixtures_SecurityTypesService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'sulu_security.fixtures.security_types' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\DataFixtures\ORM\LoadSecurityTypes
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_security.fixtures.security_types'] = new \Sulu\Bundle\SecurityBundle\DataFixtures\ORM\LoadSecurityTypes();
    }
}
