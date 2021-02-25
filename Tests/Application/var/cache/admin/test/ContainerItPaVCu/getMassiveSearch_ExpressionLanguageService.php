<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_ExpressionLanguageService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'massive_search.expression_language' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Search\ExpressionLanguage\MassiveSearchExpressionLanguage
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['massive_search.expression_language'] = new \Massive\Bundle\SearchBundle\Search\ExpressionLanguage\MassiveSearchExpressionLanguage();
    }
}
