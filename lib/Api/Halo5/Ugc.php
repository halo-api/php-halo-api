<?php

namespace HaloApi\Api\Halo5;

use HaloApi\Api\AbstractApi;

class Ugc extends AbstractApi
{
    public function playerGameVariant($player, $variant)
    {
        return $this->get('/ugc/h5/players/'.rawurlencode($player).'/gamevariants/'.rawurlencode($variant));
    }

    public function playerGameVariants($player, array $params = [])
    {
        return $this->get('/ugc/h5/players/'.rawurlencode($player).'/gamevariants', $params);
    }

    public function playerMapVariant($player, $variant)
    {
        return $this->get('/ugc/h5/players/'.rawurlencode($player).'/mapvariants/'.rawurlencode($variant));
    }

    public function playerMapVariants($player, array $params = [])
    {
        return $this->get('/ugc/h5/players/'.rawurlencode($player).'/mapvariants', $params);
    }
}
