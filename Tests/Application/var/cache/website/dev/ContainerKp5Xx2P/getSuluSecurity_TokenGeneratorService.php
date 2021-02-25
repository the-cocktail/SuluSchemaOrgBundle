<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_TokenGeneratorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu_security.token_generator' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Util\TokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_security.token_generator'] = new \Sulu\Bundle\SecurityBundle\Util\TokenGenerator();
    }
}
