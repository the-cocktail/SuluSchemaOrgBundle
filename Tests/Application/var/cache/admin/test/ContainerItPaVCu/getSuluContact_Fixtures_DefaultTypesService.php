<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_Fixtures_DefaultTypesService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_contact.fixtures.default_types' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\DataFixtures\ORM\LoadDefaultTypes
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['sulu_contact.fixtures.default_types'] = new \Sulu\Bundle\ContactBundle\DataFixtures\ORM\LoadDefaultTypes();
    }
}
