<?php

namespace ContainerItPaVCu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Voter_SuluSecurity_SecurityContextVoterService extends TheCocktail_Bundle_SuluSchemaOrgBundle_Tests_Application_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.voter.sulu_security.security_context_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['debug.security.voter.sulu_security.security_context_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($container->privates['sulu_security.security_context_voter'] ?? $container->load('getSuluSecurity_SecurityContextVoterService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
