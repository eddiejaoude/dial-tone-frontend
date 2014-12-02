<?php

namespace TransformCore\Bundle\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("Hello!")')->count() > 0);
    }

    public function testChangelog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/changelog');

        $this->assertTrue($crawler->filter('html:contains("Changelog")')->count() > 0);
    }
}
