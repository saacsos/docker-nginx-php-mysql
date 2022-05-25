<?php

namespace AppTest;

use App\Foo;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class FooTest extends TestCase
{
    public function testGetName()
    {
        $foo = new Foo();
        $this->assertEquals($foo->getName(), 'Nginx PHP MySQL');
    }

    // public function testGuzzleHttp()
    // {
    //     $client = new Client();
    //     $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
    //     $this->assertEquals($response->getStatusCode(), 200);
    //     $this->assertEquals($response->getHeaderLine('content-type'), 'application/json; charset=utf-8');
    // }
}
