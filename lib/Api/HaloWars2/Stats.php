<?php

namespace HaloApi\Api\HaloWars2;

use HaloApi\Api\AbstractApi;

class Stats extends AbstractApi
{
    public function matchEvents($matchId)
    {
        return $this->get('/stats/hw2/matches/'.rawurlencode($matchId).'/events');
    }

    public function matchResult($matchId)
    {
        return $this->get('/stats/hw2/matches/'.rawurlencode($matchId));
    }

    public function playerCampaignProgress($player)
    {
        return $this->get('/stats/hw2/players/'.rawurlencode($player).'/campaign-progress');
    }

    public function playerMatchHistory($player, array $params = [])
    {
        return $this->get('/stats/hw2/players/'.rawurlencode($player).'/matches', $params);
    }

    public function playerPlaylistRatings($playlistId, $players)
    {
        return $this->get('/stats/hw2/playlist/'.rawurlencode($playlistId).'/rating', ['players' => $players]);
    }

    public function playerSeasonStatsSummary($player, $seasonId)
    {
        return $this->get('/stats/hw2/players/'.rawurlencode($player).'/stats/seasons/'.rawurlencode($seasonId));
    }

    public function playerStatsSummary($player)
    {
        return $this->get('/stats/hw2/players/'.rawurlencode($player).'/stats');
    }

    public function playerXp($players)
    {
        return $this->get('/stats/hw2/xp', ['players' => $players]);
    }

    public function leaderboardPlayerCsr($seasonId, $playlistId, array $params)
    {
        return $this->get('/stats/hw2/player-leaderboards/csr/'.rawurlencode($seasonId).'/'.rawurlencode($playlistId), $params);
    }
}
