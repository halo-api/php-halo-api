<?php

namespace HaloApi\Tests\HttpClient;

use HaloApi\HttpClient\Builder;
use PHPUnit\Framework\TestCase;
use Http\Client\Common\Plugin;

class BuilderTest extends TestCase
{
    /**
     * @test
     */
    public function shouldClearHeaders()
    {
        $builder = $this->getMockBuilder(\HaloApi\HttpClient\Builder::class)
            ->setMethods(array('addPlugin', 'removePlugin'))
            ->getMock();
        $builder->expects($this->once())
            ->method('addPlugin')
            ->with($this->isInstanceOf(Plugin\HeaderAppendPlugin::class));

        $builder->expects($this->once())
            ->method('removePlugin')
            ->with(Plugin\HeaderAppendPlugin::class);

        $builder->clearHeaders();
    }

    /**
     * @test
     */
    public function shouldAddHeaders()
    {
        $headers = array('header1', 'header2');

        $builder = $this->getMockBuilder(\HaloApi\HttpClient\Builder::class)
            ->setMethods(array('addPlugin', 'removePlugin'))
            ->getMock();
        $builder->expects($this->once())
            ->method('addPlugin')
            ->with($this->isInstanceOf(Plugin\HeaderAppendPlugin::class));

        $builder->expects($this->once())
            ->method('removePlugin')
            ->with(Plugin\HeaderAppendPlugin::class);

        $builder->addHeaders($headers);
    }

    /**
     * @test
     */
    public function appendingHeaderShouldAddAndRemovePlugin()
    {
        $expectedHeaders = [
            'header1' => 'value1',
        ];

        $builder = $this->getMockBuilder(\HaloApi\HttpClient\Builder::class)
            ->setMethods(array('removePlugin', 'addPlugin'))
            ->getMock();

        $builder->expects($this->once())
            ->method('removePlugin')
            ->with(Plugin\HeaderAppendPlugin::class);

        $builder->expects($this->once())
            ->method('addPlugin')
            ->with(new Plugin\HeaderAppendPlugin($expectedHeaders));

        $builder->addHeaderValue('header1', 'value1');
    }
}
