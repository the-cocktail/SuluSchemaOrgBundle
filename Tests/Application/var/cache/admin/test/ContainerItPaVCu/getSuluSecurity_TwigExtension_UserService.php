<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluSecurity_TwigExtension_UserService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_security.twig_extension.user' shared service.
     *
     * @return \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_security.twig_extension.user'] = new \Sulu\Bundle\SecurityBundle\Twig\UserTwigExtension(($container->privates['sulu_security.twig_extension.user.cache'] ?? ($container->privates['sulu_security.twig_extension.user.cache'] = new \Doctrine\Common\Cache\ArrayCache())), ($container->services['sulu.repository.user'] ?? $container->getSulu_Repository_UserService()));
    }
}
