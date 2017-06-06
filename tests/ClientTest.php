<?php

namespace HaloApi\Tests;

use HaloApi\Api;
use HaloApi\Client;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * @test
     */
    public function shouldNotHaveToPassHttpClientToConstructor()
    {
        $client = new Client('apikey');

        $this->assertInstanceOf(\Http\Client\HttpClient::class, $client->getHttpClient());
    }

    /**
     * @test
     */
    public function shouldPassHttpClientInterfaceToConstructor()
    {
        $httpClientMock = $this->getMockBuilder(\Http\Client\HttpClient::class)
            ->getMock();

        $client = Client::createWithHttpClient($httpClientMock);

        $this->assertInstanceOf(\Http\Client\HttpClient::class, $client->getHttpClient());
    }

    /**
     * @test
     * @dataProvider getApiClassesProvider
     */
    public function shouldGetApiInstance($apiName, $class)
    {
        $client = new Client('apikey');

        $this->assertInstanceOf($class, $client->api($apiName));
    }

    /**
     * @test
     * @dataProvider getApiClassesProvider
     */
    public function shouldGetMagicApiInstance($apiName, $class)
    {
        $client = new Client('apikey');

        $this->assertInstanceOf($class, $client->$apiName());
    }

    /**
     * @test
     * @expectedException \HaloApi\Exception\InvalidArgumentException
     */
    public function shouldNotGetApiInstance()
    {
        $client = new Client('apikey');
        $client->api('do_not_exist');
    }

    /**
     * @test
     * @expectedException \HaloApi\Exception\BadMethodCallException
     */
    public function shouldNotGetMagicApiInstance()
    {
        $client = new Client('apikey');
        $client->doNotExist();
    }

    public function getApiClassesProvider()
    {
        return [
            ['h5Metadata', Api\Halo5\Metadata::class],
            ['halo5Metadata', Api\Halo5\Metadata::class],

            ['h5Profile', Api\Halo5\Profile::class],
            ['halo5Profile', Api\Halo5\Profile::class],

            ['h5Stats', Api\Halo5\Stats::class],
            ['halo5Stats', Api\Halo5\Stats::class],

            ['h5Ugc', Api\Halo5\Ugc::class],
            ['halo5Ugc', Api\Halo5\Ugc::class],

            ['hw2Metadata', Api\HaloWars2\Metadata::class],
            ['halowars2Metadata', Api\HaloWars2\Metadata::class],

            ['hw2Stats', Api\HaloWars2\Stats::class],
            ['halowars2Stats', Api\HaloWars2\Stats::class],

            ['h5pcStats', Api\Halo5\Pc\Stats::class],
            ['halo5Spctats', Api\Halo5\Pc\Stats::class],
        ];
    }
}
