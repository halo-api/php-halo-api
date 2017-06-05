<?php

namespace HaloApi\Tests\Api\Halo5;

use HaloApi\Api\Halo5\Ugc;
use HaloApi\Tests\Api\TestCase;

class UgcTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetPlayerGameVariant()
    {
        $expectedOutput = ['game-variant'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/ugc/h5/players/playera/gamevariants/variant1')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerGameVariant('playera', 'variant1'));
    }
    /**
     * @test
     */
    public function shouldGetPlayerGameVariants()
    {
        $expectedOutput = ['game-variant1', 'game-variant2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/ugc/h5/players/playera/gamevariants')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerGameVariants('playera'));
    }
    /**
     * @test
     */
    public function shouldGetPlayerMapVariant()
    {
        $expectedOutput = ['map-variant'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/ugc/h5/players/playera/mapvariants/variant1')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerMapVariant('playera', 'variant1'));
    }
    /**
     * @test
     */
    public function shouldGetPlayerMapVariants()
    {
        $expectedOutput = ['map-variant1', 'map-variant2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/ugc/h5/players/playera/mapvariants')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerMapVariants('playera'));
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Ugc::class;
    }
}
