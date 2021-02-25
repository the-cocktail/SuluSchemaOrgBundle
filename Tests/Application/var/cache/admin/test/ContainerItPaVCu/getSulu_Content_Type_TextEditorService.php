<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSulu_Content_Type_TextEditorService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the public 'sulu.content.type.text_editor' shared service.
     *
     * @return \Sulu\Component\Content\Types\TextEditor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['sulu.content.type.text_editor'] = new \Sulu\Component\Content\Types\TextEditor(($container->privates['sulu_markup.parser'] ?? $container->getSuluMarkup_ParserService()));
    }
}
