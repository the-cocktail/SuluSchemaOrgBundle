<?php

namespace TheCocktail\Bundle\MegaMenuBundle\Tests\Functional\Integration;

use Sulu\Bundle\TestBundle\Testing\WebsiteTestCase;

class WebsiteControllerTest extends WebsiteTestCase
{
    public function testHomepage(): void
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testExpectedScript(): void
    {
        $script = '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"WebSite","name":"Hompage","url":"\/"}</script>';
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $schema = $crawler->filter('#schema')->html();

        $this->assertSame($schema, $script);
    }
}
