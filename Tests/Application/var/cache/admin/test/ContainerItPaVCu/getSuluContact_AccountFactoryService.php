<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluContact_AccountFactoryService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu_contact.account_factory' shared service.
     *
     * @return \Sulu\Bundle\ContactBundle\Contact\AccountFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu_contact.account_factory'] = new \Sulu\Bundle\ContactBundle\Contact\AccountFactory('Sulu\\Bundle\\ContactBundle\\Entity\\Account');
    }
}
