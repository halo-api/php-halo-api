<?php

namespace HaloApi\Api\Halo5;

use HaloApi\Api\AbstractApi;

class Profile extends AbstractApi
{
    public function emblemImage($player, $size = null)
    {
        return $this->get('/profile/h5/profiles/'.rawurlencode($player).'/emblem', ['size' => $size]);
    }

    public function spartanImage($player, $size = null, $crop = null)
    {
        return $this->get(
            '/profile/h5/profiles/'.rawurlencode($player).'/spartan',
            ['size' => $size, 'crop' => $crop]
        );
    }
}
