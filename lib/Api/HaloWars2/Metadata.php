<?php

namespace HaloApi\Api\HaloWars2;

use HaloApi\Api\AbstractApi;

class Metadata extends AbstractApi
{
    public function campaignLevels(array $params = [])
    {
        return $this->get('/metadata/hw2/campaign-levels', $params);
    }

    public function campaignLogs(array $params = [])
    {
        return $this->get('/metadata/hw2/campaign-logs', $params);
    }

    public function cardKeywords(array $params = [])
    {
        return $this->get('/metadata/hw2/card-keywords', $params);
    }

    public function cards(array $params = [])
    {
        return $this->get('/metadata/hw2/cards', $params);
    }

    public function csrDesignations(array $params = [])
    {
        return $this->get('/metadata/hw2/csr-designations', $params);
    }

    public function difficulties(array $params = [])
    {
        return $this->get('/metadata/hw2/difficulties', $params);
    }

    public function gameObjectCategories(array $params = [])
    {
        return $this->get('/metadata/hw2/game-object-categories', $params);
    }

    public function gameObjects(array $params = [])
    {
        return $this->get('/metadata/hw2/game-objects', $params);
    }

    public function leaderPowers(array $params = [])
    {
        return $this->get('/metadata/hw2/leader-powers', $params);
    }

    public function leaders(array $params = [])
    {
        return $this->get('/metadata/hw2/leaders', $params);
    }

    public function maps(array $params = [])
    {
        return $this->get('/metadata/hw2/maps', $params);
    }

    public function packs(array $params = [])
    {
        return $this->get('/metadata/hw2/packs', $params);
    }

    public function playlists(array $params = [])
    {
        return $this->get('/metadata/hw2/playlists', $params);
    }

    public function seasons(array $params = [])
    {
        return $this->get('/metadata/hw2/seasons', $params);
    }

    public function spartanRanks(array $params = [])
    {
        return $this->get('/metadata/hw2/spartan-ranks', $params);
    }

    public function techs(array $params = [])
    {
        return $this->get('/metadata/hw2/techs', $params);
    }
}
