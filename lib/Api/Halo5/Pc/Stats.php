<?php

namespace HaloApi\Api\Halo5\Pc;

use HaloApi\Api\AbstractApi;

class Stats extends AbstractApi
{
    public function matchResultCustom($matchId)
    {
        return $this->get('/stats/h5pc/custom/matches/' . rawurlencode($matchId));
    }

    public function playerMatchHistory($player, array $params = [])
    {
        return $this->get('/stats/h5pc/players/'.rawurlencode($player).'/matches', $params);
    }

    public function playerServiceRecordsCustom($players)
    {
        return $this->get('/stats/h5pc/servicerecords/custom', ['players' => $players]);
    }
}
