<?php

declare(strict_types=1);

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Tests\Application;

use Sulu\Bundle\AudienceTargetingBundle\SuluAudienceTargetingBundle;
use Sulu\Bundle\TestBundle\Kernel\SuluTestKernel;
use Symfony\Component\Config\Loader\LoaderInterface;
use TheCocktail\Bundle\SuluSchemaOrgBundle\SuluSchemaOrgBundle;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Tests\Application\AppBundle\AppBundle;

class Kernel extends SuluTestKernel
{
    /**
     * @inheritDoc
     */
    public function registerBundles()
    {
        $bundles = parent::registerBundles();
        $bundles[] = new SuluSchemaOrgBundle();
        $bundles[] = new AppBundle();

        foreach ($bundles as $key => $bundle) {
            // Audience Targeting is not configured and so should not be here
            if ($bundle instanceof SuluAudienceTargetingBundle) {
                unset($bundles[$key]);

                break;
            }
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
        parent::registerContainerConfiguration($loader);
        $loader->load(__DIR__ . '/config/config_' . $this->getContext() . '.yml');
    }
}
