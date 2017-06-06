<?php

namespace HaloApi\Tests\Api\Halo5\Pc;

use HaloApi\Api\Halo5\Pc\Stats;
use HaloApi\Tests\Api\TestCase;

class StatsTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetMatchResultCustom()
    {
        $expectedOutput = ['result1', 'result2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5pc/custom/matches/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchResultCustom(123));
    }

    /**
     * @test
     */
    public function shouldGetPlayerMatchHistory()
    {
        $expectedOutput = ['match1', 'match2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5pc/players/playera/matches')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerMatchHistory('playera', ['modes' => 'arena']));
    }

    /**
     * @test
     */
    public function shouldGetPlayerServiceRecordsCustom()
    {
        $expectedOutput = ['result1', 'result2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5pc/servicerecords/custom', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerServiceRecordsCustom('playera,playerb'));
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Stats::class;
    }
}
