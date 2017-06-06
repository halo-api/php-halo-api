<?php

namespace HaloApi\Tests\Api\HaloWars2;

use HaloApi\Api\HaloWars2\Metadata;
use HaloApi\Tests\Api\TestCase;

class MetadataTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetCampaignLevels()
    {
        $expectedOutput = ['level1', 'level2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/campaign-levels', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->campaignLevels(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetCampaignLogs()
    {
        $expectedOutput = ['log1', 'log2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/campaign-logs', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->campaignLogs(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetCardKeywords()
    {
        $expectedOutput = ['keyword1', 'keyword2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/card-keywords', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->cardKeywords(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetCards()
    {
        $expectedOutput = ['card1', 'card2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/cards', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->cards(['startAt' => 100]));
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
            ->with('/metadata/hw2/csr-designations', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->csrDesignations(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetDifficulties()
    {
        $expectedOutput = ['difficulty1', 'difficulty2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/difficulties', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->difficulties(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetGameObjectCategories()
    {
        $expectedOutput = ['category1', 'category2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/game-object-categories', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->gameObjectCategories(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetGameObjects()
    {
        $expectedOutput = ['object1', 'object2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/game-objects', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->gameObjects(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetLeaderPowers()
    {
        $expectedOutput = ['power1', 'power2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/leader-powers', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->leaderPowers(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetLeaders()
    {
        $expectedOutput = ['leader1', 'leader2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/leaders', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->leaders(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetMaps()
    {
        $expectedOutput = ['map1', 'maps2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/maps', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->maps(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetPacks()
    {
        $expectedOutput = ['pack1', 'pack2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/packs', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->packs(['startAt' => 100]));
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
            ->with('/metadata/hw2/playlists', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->playlists(['startAt' => 100]));
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
            ->with('/metadata/hw2/seasons', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->seasons(['startAt' => 100]));
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
            ->with('/metadata/hw2/spartan-ranks', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->spartanRanks(['startAt' => 100]));
    }

    /**
     * @test
     */
    public function shouldGetTechs()
    {
        $expectedOutput = ['tech1', 'tech2'];

        $api = $this->getApiMock();

        $api->expects($this->once())
            ->method('get')
            ->with('/metadata/hw2/techs', ['startAt' => 100])
            ->will($this->returnValue($expectedOutput));

        $this->assertEquals($expectedOutput, $api->techs(['startAt' => 100]));
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return Metadata::class;
    }
}
