<?php

namespace HaloApi\Tests\Api\Halo5;

use HaloApi\Api\Halo5\Metadata;
use HaloApi\Tests\Api\TestCase;

class MetadataTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetCampaignMissions()
    {
        $expectedOutput = ['mission1', 'mission2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/campaign-missions')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->campaignMissions());
    }

    /**
     * @test
     */
    public function shouldGetCommendations()
    {
        $expectedOutput = ['commendation1', 'commendation2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/commendations')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->commendations());
    }

    /**
     * @test
     */
    public function shouldGetCsrDesignations()
    {
        $expectedOutput = ['designation1', 'designation2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/csr-designations')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->csrDesignations());
    }

    /**
     * @test
     */
    public function shouldGetEnemies()
    {
        $expectedOutput = ['enemy1', 'enemy2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/enemies')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->enemies());
    }

    /**
     * @test
     */
    public function shouldGetFlexibleStats()
    {
        $expectedOutput = ['stats1', 'stats2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/flexible-stats')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->flexibleStats());
    }

    /**
     * @test
     */
    public function shouldGetGameBaseVariants()
    {
        $expectedOutput = ['variant1', 'variant2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/game-base-variants')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->gameBaseVariants());
    }

    /**
     * @test
     */
    public function shouldGetGameVariant()
    {
        $expectedOutput = ['game-variant'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/game-variants/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->gameVariant('123'));
    }

    /**
     * @test
     */
    public function shouldGetImpulses()
    {
        $expectedOutput = ['impulse1', 'impulse2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/impulses')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->impulses());
    }

    /**
     * @test
     */
    public function shouldGetMapVariant()
    {
        $expectedOutput = ['map-variant'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/map-variants/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->mapVariant(123));
    }

    /**
     * @test
     */
    public function shouldGetMaps()
    {
        $expectedOutput = ['map1', 'map2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/maps')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->maps());
    }

    /**
     * @test
     */
    public function shouldGetMedals()
    {
        $expectedOutput = ['medal1', 'medal2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/medals')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->medals());
    }

    /**
     * @test
     */
    public function shouldGetPlaylists()
    {
        $expectedOutput = ['playlist1', 'playlist2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/playlists')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playlists());
    }

    /**
     * @test
     */
    public function shouldGetRequisition()
    {
        $expectedOutput = ['requisition'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/requisitions/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->requisition(123));
    }

    /**
     * @test
     */
    public function shouldGetRequisitionPacks()
    {
        $expectedOutput = ['requisition-pack'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/requisition-packs/123')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->requisitionPack(123));
    }

    /**
     * @test
     */
    public function shouldGetSeasons()
    {
        $expectedOutput = ['season1', 'season2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/seasons')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->seasons());
    }

    /**
     * @test
     */
    public function shouldGetSkulls()
    {
        $expectedOutput = ['skull1', 'skull2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/skulls')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->skulls());
    }

    /**
     * @test
     */
    public function shouldGetSpartanRanks()
    {
        $expectedOutput = ['rank1', 'rank2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/spartan-ranks')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->spartanRanks());
    }

    /**
     * @test
     */
    public function shouldGetTeamColors()
    {
        $expectedOutput = ['color1', 'color2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/team-colors')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->teamColors());
    }

    /**
     * @test
     */
    public function shouldGetVehicles()
    {
        $expectedOutput = ['vehicle1', 'vehicle2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/vehicles')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->vehicles());
    }

    /**
     * @test
     */
    public function shouldGetWeapons()
    {
        $expectedOutput = ['weapon1', 'weapon2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/h5/metadata/weapons')
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->weapons());
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Metadata::class;
    }
}
