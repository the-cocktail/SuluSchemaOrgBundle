<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_CopyLocaleService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.copy_locale' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\ContentLocaleCopyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_page.command.copy_locale'] = $instance = new \Sulu\Bundle\PageBundle\Command\ContentLocaleCopyCommand(($container->services['sulu.content.mapper'] ?? $container->load('getSulu_Content_MapperService')), ($container->services['doctrine_phpcr.session'] ?? $container->getDoctrinePhpcr_SessionService()), 'i18n');

        $instance->setName('sulu:content:locale-copy');

        return $instance;
    }
}
