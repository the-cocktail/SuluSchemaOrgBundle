<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSuluPage_Command_WebspaceCopyService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'sulu_page.command.webspace_copy' shared service.
     *
     * @return \Sulu\Bundle\PageBundle\Command\WebspaceCopyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sulu_page.command.webspace_copy'] = $instance = new \Sulu\Bundle\PageBundle\Command\WebspaceCopyCommand(($container->services['sulu_document_manager.document_manager'] ?? $container->getSuluDocumentManager_DocumentManagerService()), ($container->services['sulu.phpcr.session'] ?? $container->getSulu_Phpcr_SessionService()), ($container->services['sulu_document_manager.document_inspector'] ?? $container->getSuluDocumentManager_DocumentInspectorService()), ($container->services['sulu_markup.parser.html_extractor'] ?? ($container->services['sulu_markup.parser.html_extractor'] = new \Sulu\Bundle\MarkupBundle\Markup\HtmlTagExtractor('sulu'))));

        $instance->setName('sulu:webspaces:copy');

        return $instance;
    }
}
