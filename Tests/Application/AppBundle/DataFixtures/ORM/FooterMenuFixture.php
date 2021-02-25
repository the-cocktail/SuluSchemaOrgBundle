<?php

/**
 * This file is part of Sulu Megamenu Bundle.
 *
 * (c) The Cocktail Expericence S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace TheCocktail\Bundle\MegaMenuBundle\Tests\Application\AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use TheCocktail\Bundle\MegaMenuBundle\Entity\MenuItem;

class FooterMenuFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $footer = new MenuItem();
        $footer->setLocale('en');
        $footer->setTitle('Footer Section');
        $footer->setResourceKey('footer');
        $footer->setWebspace("sulu-io");
        $manager->persist($footer);

        for ($i = 0; $i <= 4; $i++) {
            $item = new MenuItem();
            $item->setLocale('en');
            $item->setTitle('Link-'.$i);
            $item->setResourceKey('footer');
            $item->setWebspace("sulu-io");
            $item->setParent($footer);
            $item->setPosition($i);
            $manager->persist($item);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 7;
    }
}
