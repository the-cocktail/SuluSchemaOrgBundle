<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_EmailService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.email' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Content\Types\Email
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu.content.type.email'] = new \Sulu\Bundle\PageBundle\Content\Types\Email();
    }
}
