<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Metadata_Driver_XmlService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'massive_search.metadata.driver.xml' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\Metadata\Driver\XmlDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.metadata.driver.xml'] = new \Massive\Bundle\SearchBundle\Search\Metadata\Driver\XmlDriver(($container->privates['sulu_search.search.factory'] ?? ($container->privates['sulu_search.search.factory'] = new \Sulu\Bundle\SearchBundle\Search\Factory())), ($container->privates['massive_search.metadata.file_locator'] ?? ($container->privates['massive_search.metadata.file_locator'] = new \Metadata\Driver\FileLocator(['Sulu\\Bundle\\ContactBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/ContactBundle/Resources/config/massive-search', 'Sulu\\Bundle\\MediaBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/MediaBundle/Resources/config/massive-search', 'Sulu\\Bundle\\CategoryBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/massive-search']))));
    }
}
