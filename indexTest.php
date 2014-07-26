<?php

require_once __DIR__.'/vendor/autoload.php';

use Silex\WebTestCase;

class IndexTest extends WebTestCase
{
  public function createApplication()
  {
    $app = require __DIR__ . '/app.php';

    //$app['debug'] = true;
    //$app['exception_handler']->disable();

    return $app;
  }

  public function testIndex()
  {
    $client = $this->createClient();
    $crawler = $client->request('GET', '/');

    # ok?
    $this->assertTrue($client->getResponse()->isOK());

    # check count
    $response = $client->getResponse();
    $data = json_decode($response->getContent(), true);

    $this->assertEquals(2, count($data));

    # check body of toy 00001
    $toy00001 = array(
        'name' => 'Racing Car',
        'quantity' => '53',
        'description' => '...',
        'image' => 'racing_car.jpg',
    );

    $this->assertSame($toy00001, $data['00001']);
  }
}
