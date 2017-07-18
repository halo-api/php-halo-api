<?php

namespace HaloApi\Tests\Api\Halo5;

use HaloApi\Api\Halo5\Profile;
use HaloApi\Tests\Api\TestCase;

class ProfileTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetEmblemImage()
    {
        $expectedOutput = 'image-data-string';

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/profile/h5/profiles/playera/emblem', ['size' => 256])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->emblemImage('playera', 256));
    }

    /**
     * @test
     */
    public function shouldGetSpartanImage()
    {
        $expectedOutput = 'image-data-string';

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/profile/h5/profiles/playera/spartan', ['size' => 256, 'crop' => 'portrait'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->spartanImage('playera', 256, 'portrait'));
    }

    /**
     * @test
     */
    public function shouldGetPlayerAppearance()
    {
        $expectedOutput = ['response'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/profile/h5/profiles/playera/appearance')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->appearance('playera'));
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Profile::class;
    }
}
