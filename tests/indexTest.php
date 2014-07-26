<?php

require_once __DIR__ . '../vendor/autoload.php'

use Silex\WebTestCase;

class IndexTest extends WebTestCase
{
  public function createApplication()
  {
    $app = new Silex\Application();

    require __DIR__.'index.php';

    $app['debug'] = true;
    $app['exception_handler']->disable();

    return $app;
  }

  public function test()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/');

    $this->assertTrue($client->getResponse()->isOK());
  }
}
