<?php

namespace HaloApi\Api\Halo5;

use HaloApi\Api\AbstractApi;

class Stats extends AbstractApi
{
    public function playerCsr($seasonId, $playlistId, array $params = [])
    {
        return $this->get(
            '/stats/h5/player-leaderboards/csr/'.rawurlencode($seasonId).'/'.rawurlencode($playlistId),
            $params
        );
    }

    public function matchEvents($matchId)
    {
        return $this->get('/stats/h5/matches/'.rawurlencode($matchId).'/events');
    }

    public function matchResultArena($matchId)
    {
        return $this->get('/stats/h5/arena/matches/'.rawurlencode($matchId));
    }

    public function matchResultCampaign($matchId)
    {
        return $this->get('/stats/h5/campaign/matches/'.rawurlencode($matchId));
    }

    public function matchCustom($matchId)
    {
        return $this->get('/stats/h5/custom/matches/'.rawurlencode($matchId));
    }

    public function matchWarzone($matchId)
    {
        return $this->get('/stats/h5/warzone/matches/'.rawurlencode($matchId));
    }

    public function playerMatchHistory($player, array $params = [])
    {
        return $this->get('/stats/h5/players/'.rawurlencode($player).'/matches', $params);
    }

    public function playerServiceRecordsArena($players, $seasonId = null)
    {
        $params = ['players' => $players];
        if (null !== $seasonId) {
            $params['seasonId'] = $seasonId;
        }

        $this->get('/stats/h5/servicerecords/arena', $params);
    }

    public function playerServiceRecordsCampaign($players)
    {
        $this->get('/stats/h5/servicerecords/campaign', ['players' => $players]);
    }

    public function playerServiceRecordsCustom($players)
    {
        $this->get('/stats/h5/servicerecords/arena', ['players' => $players]);
    }

    public function playerServiceRecordsWarzone($players)
    {
        $this->get('/stats/h5/servicerecords/arena', ['players' => $players]);
    }
}
