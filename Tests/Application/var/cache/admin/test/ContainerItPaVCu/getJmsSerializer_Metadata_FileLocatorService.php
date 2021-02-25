<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_FileLocatorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.file_locator' shared service.
     *
     * @return \Metadata\Driver\FileLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator(['Sulu\\Bundle\\SearchBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer', 'Sulu\\Bundle\\PageBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Bundle\\CategoryBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/Resources/config/serializer', 'Sulu\\Bundle\\SnippetBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/SnippetBundle/Resources/config/serializer', 'Sulu\\Bundle\\DocumentManagerBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/Resources/config/serializer', 'Sulu\\Bundle\\CustomUrlBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/Resources/config/serializer', 'Sulu\\Bundle\\AdminBundle' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Resources/config/serializer', 'Sulu\\Component\\SmartContent\\Configuration' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\CustomUrl' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\DocumentManager' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/DocumentManagerBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Bundle\\CategoryBundle\\Entity' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/CategoryBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\Content' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/DependencyInjection/../Resources/config/serializer', 'Sulu\\Component\\Webspace' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/PageBundle/DependencyInjection/../Resources/config/serializer', 'Massive\\Bundle\\SearchBundle\\Search' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/massive', 'Sulu\\Bundle\\SearchBundle\\Search' => '/Users/pablolozano/Projects/SuluSchemaOrgBundle/vendor/sulu/sulu/src/Sulu/Bundle/SearchBundle/Resources/config/serializer/sulu']);
    }
}
