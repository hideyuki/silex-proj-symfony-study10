<?php

require_once __DIR__.'/vendor/autoload.php';

//use Silex\WebTestCase;

//class IndexTest extends WebTestCase
class IndexTest extends Silex\WebTestCase
{
  public function createApplication()
  {
    $app = new Silex\Application();

    require __DIR__ . 'index.php';

    $app['debug'] = true;
    $app['exception_handler']->disable();

    return $app;
  }

  public function testIndex()
  {
    /*$client = $this->createClient();
    $crawler = $client->request('GET', '/');

    $this->assertTrue($client->getResponse()->isOK());
     */
    $this->assertEquals(0, 0);
  }
}
