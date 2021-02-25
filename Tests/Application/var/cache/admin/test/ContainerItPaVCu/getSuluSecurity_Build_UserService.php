<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_Build_UserService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_security.build.user' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Build\UserBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_security.build.user'] = new \Sulu\Bundle\SecurityBundle\Build\UserBuilder();
    }
}
