<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Util_IdConverterService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_contact.util.id_converter' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Util\CustomerIdConverter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_contact.util.id_converter'] = new \Sulu\Bundle\ContactBundle\Util\CustomerIdConverter();
    }
}
