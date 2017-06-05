<?php

namespace HaloApi\Tests\Api;

use HaloApi\Client;
use \PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @return string
     */
    abstract protected function getApiClass();

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getApiMock()
    {
        $httpClient = $this->getMockBuilder(\Http\Client\HttpClient::class)
            ->setMethods(array('sendRequest'))
            ->getMock();

        $httpClient
            ->expects($this->any())
            ->method('sendRequest');

        $client = Client::createWithHttpClient($httpClient);

        $api = $this->getMockBuilder($this->getApiClass())
            ->setMethods(array('get'))
            ->setConstructorArgs(array($client))
            ->getMock();

        return $api;
    }

    /**
     * @param object $object
     * @param string $methodName
     * @return \ReflectionMethod
     */
    protected function getMethod($object, $methodName)
    {
        $method = new \ReflectionMethod($object, $methodName);
        $method->setAccessible(true);

        return $method;
    }
}
