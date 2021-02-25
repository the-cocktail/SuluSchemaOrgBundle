<?php

namespace ContainerKp5Xx2P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Metadata_FileLocatorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelDevDebugContainer
{
    /**
     * Gets the private 'massive_search.metadata.file_locator' shared service.
     *
     * @return \Metadata\Driver\FileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.metadata.file_locator'] = new \Metadata\Driver\FileLocator(['Sulu\\Bundle\\ContactBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/config/massive-search', 'Sulu\\Bundle\\MediaBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/config/massive-search', 'Sulu\\Bundle\\CategoryBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/massive-search']);
    }
}
