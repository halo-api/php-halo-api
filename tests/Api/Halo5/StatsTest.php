<?php

namespace HaloApi\Tests\Api\Halo5;

use HaloApi\Api\Halo5\Stats;
use HaloApi\Tests\Api\TestCase;

class StatsTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetPlayerCsr()
    {
        $expectedOutput = ['player-csr-data'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/player-leaderboards/csr/123/456')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerCsr(123, 456));
    }

    /**
     * @test
     */
    public function shouldGetPlayerCsrWithParameters()
    {
        $expectedOutput = ['player-csr-data'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/player-leaderboards/csr/123/456', ['count' => 150])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerCsr(123, 456, ['count' => 150]));
    }

    /**
     * @test
     */
    public function shouldGetMatchEvents()
    {
        $expectedOutput = ['match-event1', 'match-event2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/matches/123/events')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchEvents(123));
    }

    /**
     * @test
     */
    public function shouldGetMatchResultArena()
    {
        $expectedOutput = ['match1', 'match2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/arena/matches/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchResultArena(123));
    }

    /**
     * @test
     */
    public function shouldGetMatchResultCampaign()
    {
        $expectedOutput = ['match1', 'match2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/campaign/matches/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchResultCampaign(123));
    }

    /**
     * @test
     */
    public function shouldGetMatchResultCustom()
    {
        $expectedOutput = ['match1', 'match2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/custom/matches/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchResultCustom(123));
    }

    /**
     * @test
     */
    public function shouldGetMatchResultWarzone()
    {
        $expectedOutput = ['match1', 'match2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/warzone/matches/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchResultWarzone(123));
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
            ->with('/stats/h5/players/playera/matches', ['modes' => 'arena,custom'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerMatchHistory('playera', ['modes' => 'arena,custom']));
    }

    /**
     * @test
     */
    public function shouldGetPlayerServiceRecordsArena()
    {
        $expectedOutput = ['data1', 'data2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/servicerecords/arena', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerServiceRecordsArena('playera,playerb'));
    }

    /**
     * @test
     */
    public function shouldGetPlayerServiceRecordsCampaign()
    {
        $expectedOutput = ['data1', 'data2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/servicerecords/campaign', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerServiceRecordsCampaign('playera,playerb'));
    }

    /**
     * @test
     */
    public function shouldGetPlayerServiceRecordsCustom()
    {
        $expectedOutput = ['data1', 'data2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/servicerecords/custom', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerServiceRecordsCustom('playera,playerb'));
    }

    /**
     * @test
     */
    public function shouldGetPlayerServiceRecordsWarzone()
    {
        $expectedOutput = ['data1', 'data2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/h5/servicerecords/warzone', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerServiceRecordsWarzone('playera,playerb'));
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Stats::class;
    }
}
