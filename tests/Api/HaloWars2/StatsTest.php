<?php

namespace HaloApi\Tests\Api\HaloWars2;

use HaloApi\Api\HaloWars2\Stats;
use HaloApi\Tests\Api\TestCase;

class StatsTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetMatchEvents()
    {
        $expectedOutput = ['event1', 'event2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/matches/123/events')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchEvents(123));
    }

    /**
     * @test
     */
    public function shouldGetMatchResult()
    {
        $expectedOutput = ['match-result'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/matches/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->matchResult(123));
    }

    /**
     * @test
     */
    public function shouldGetPlayerCampaignProgress()
    {
        $expectedOutput = ['data'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/players/playera/campaign-progress')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerCampaignProgress('playera'));
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
            ->with('/stats/hw2/players/playera/matches', ['matchType' => 'custom'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerMatchHistory('playera', ['matchType' => 'custom']));
    }

    /**
     * @test
     */
    public function shouldGetPlayerPlaylistRatings()
    {
        $expectedOutput = ['rating1', 'rating2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/playlist/123/rating', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerPlaylistRatings(123, 'playera,playerb'));
    }

    /**
     * @test
     */
    public function shouldGetPlayerSeasonStatsSummary()
    {
        $expectedOutput = ['stats1', 'stats2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/players/playera/stats/seasons/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerSeasonStatsSummary('playera', 123));
    }

    /**
     * @test
     */
    public function shouldGetPlayerStatsSummary()
    {
        $expectedOutput = ['stats1', 'stats2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/players/playera/stats')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerStatsSummary('playera'));
    }

    /**
     * @test
     */
    public function shouldGetPlayerXp()
    {
        $expectedOutput = ['xp-data'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/xp', ['players' => 'playera,playerb'])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playerXp('playera,playerb'));
    }

    /**
     * @test
     */
    public function shouldGetLeaderboardPlayerCsr()
    {
        $expectedOutput = ['leaderboard-data'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/stats/hw2/player-leaderboards/csr/123/456', ['count' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->leaderboardPlayerCsr(123, 456, ['count' => 100]));
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Stats::class;
    }
}
