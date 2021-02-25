<?php

declare(strict_types=1);

namespace TheCocktail\Bundle\MegaMenuBundle\Tests\Application\AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use TheCocktail\Bundle\MegaMenuBundle\Entity\MenuItem;

class HeaderMenuFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $header = new MenuItem();
        $header->setLocale('en');
        $header->setTitle('Header Section');
        $header->setResourceKey('header');
        $header->setWebspace("sulu-io");
        $manager->persist($header);

        for ($i = 0; $i <= 4; $i++) {
            $item = new MenuItem();
            $item->setLocale('en');
            $item->setTitle('Link-'.$i);
            $item->setResourceKey('header');
            $item->setWebspace("sulu-io");
            $item->setParent($header);
            $item->setPosition($i);
            $manager->persist($item);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 6;
    }
}
