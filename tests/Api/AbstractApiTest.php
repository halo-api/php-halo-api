<?php

namespace HaloApi\Tests\Api;

use HaloApi\Api\AbstractApi;

class AbstractApiTest extends TestCase
{
    /**
     * @test
     */
    public function shouldPassGETRequestToClient()
    {
        $expectedArray = array('value');

        $httpClient = $this->getHttpMethodsMock(array('get'));
        $httpClient
            ->expects($this->any())
            ->method('get')
            ->with('/path?param1=param1value', array('header1' => 'header1value'))
            ->will($this->returnValue($this->getPSR7Response($expectedArray)));

        $client = $this->getMockBuilder(\HaloApi\Client::class)
            ->setMethods(array('getHttpClient'))
            ->setConstructorArgs(array('apikey'))
            ->getMock();

        $client->expects($this->any())
            ->method('getHttpClient')
            ->willReturn($httpClient);

        $api = $this->getAbstractApiObject($client);

        $actual = $this->getMethod($api, 'get')
            ->invokeArgs($api, ['/path', ['param1' => 'param1value'], ['header1' => 'header1value']]);

        $this->assertEquals($expectedArray, $actual);
    }

    /**
     * @param $client
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getAbstractApiObject($client)
    {
        return $this->getMockBuilder($this->getApiClass())
            ->setMethods(null)
            ->setConstructorArgs([$client])
            ->getMock();
    }

    /**
     * @return \HaloApi\Client
     */
    protected function getClientMock()
    {
        return new \HaloApi\Client($this->getHttpMethodsMock());
    }

    /**
     * Return a HttpMethods client mock
     *
     * @param array $methods
     * @return \Http\Client\Common\HttpMethodsClient
     */
    protected function getHttpMethodsMock(array $methods = array())
    {
        $methods = array_merge(array('sendRequest'), $methods);
        $mock = $this->getMockBuilder(\Http\Client\Common\HttpMethodsClient::class)
            ->disableOriginalConstructor()
            ->setMethods($methods)
            ->getMock();
        $mock
            ->expects($this->any())
            ->method('sendRequest');

        return $mock;
    }
    /**
     * @return \Http\Client\HttpClient
     */
    protected function getHttpClientMock()
    {
        $mock = $this->getMockBuilder(\Http\Client\HttpClient::class)
            ->setMethods(array('sendRequest'))
            ->getMock();
        $mock
            ->expects($this->any())
            ->method('sendRequest');

        return $mock;
    }

    /**
     * @param $expectedArray
     *
     * @return \GuzzleHttp\Psr7\Response
     */
    private function getPSR7Response($expectedArray)
    {
        return new \GuzzleHttp\Psr7\Response(
            200,
            array('Content-Type' => 'application/json'),
            \GuzzleHttp\Psr7\stream_for(json_encode($expectedArray))
        );
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return AbstractApi::class;
    }
}
