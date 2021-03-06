<?php

namespace HaloApi\Tests\HttpClient\Message;

use HaloApi\HttpClient\Message\ResponseMediator;
use PHPUnit\Framework\TestCase;

class ResponseMediatorTest extends TestCase
{
    public function testGetContent()
    {
        $body = ['foo' => 'bar'];
        $response = new \GuzzleHttp\Psr7\Response(
            200,
            ['Content-Type' => 'application/json'],
            \GuzzleHttp\Psr7\stream_for(json_encode($body))
        );

        $this->assertEquals($body, ResponseMediator::getContent($response));
    }

    /**
     * If content-type is not json we should get the raw body.
     */
    public function testGetContentNotJson()
    {
        $body = 'foobar';
        $response = new \GuzzleHttp\Psr7\Response(
            200,
            [],
            \GuzzleHttp\Psr7\stream_for($body)
        );

        $this->assertEquals($body, ResponseMediator::getContent($response));
    }

    /**
     * Make sure we return the body if we have invalid json
     */
    public function testGetContentInvalidJson()
    {
        $body = 'foobar';
        $response = new \GuzzleHttp\Psr7\Response(
            200,
            ['Content-Type' => 'application/json'],
            \GuzzleHttp\Psr7\stream_for($body)
        );

        $this->assertEquals($body, ResponseMediator::getContent($response));
    }

    public function testGetHeader()
    {
        $header = 'application/json';
        $response = new \GuzzleHttp\Psr7\Response(
            200,
            array('Content-Type'=> $header)
        );

        $this->assertEquals($header, ResponseMediator::getHeader($response, 'content-type'));
    }
}
