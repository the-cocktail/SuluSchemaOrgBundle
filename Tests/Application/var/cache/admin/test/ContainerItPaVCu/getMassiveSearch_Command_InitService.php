<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMassiveSearch_Command_InitService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'massive_search.command.init' shared service.
     *
     * @return \Massive\Bundle\SearchBundle\Command\InitCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['massive_search.command.init'] = $instance = new \Massive\Bundle\SearchBundle\Command\InitCommand(($container->services['massive_search.adapter.zend_lucene'] ?? $container->load('getMassiveSearch_Adapter_ZendLuceneService')));

        $instance->setName('massive:search:init');

        return $instance;
    }
}
