<?php

namespace HaloApi\Api\Halo5;

use HaloApi\Api\AbstractApi;

class Metadata extends AbstractApi
{
    public function campaignMissions()
    {
        return $this->get('/metadata/h5/metadata/campaign-missions');
    }

    public function commendations()
    {
        return $this->get('/metadata/h5/metadata/commendations');
    }

    public function csrDesignations()
    {
        return $this->get('/metadata/h5/metadata/csr-designations');
    }

    public function enemies()
    {
        return $this->get('/metadata/h5/metadata/enemies');
    }

    public function flexibleStats()
    {
        return $this->get('/metadata/h5/metadata/flexible-stats');
    }

    public function gameBaseVariants()
    {
        return $this->get('/metadata/h5/metadata/game-base-variants');
    }

    public function gameVariant($id)
    {
        return $this->get('/metadata/h5/metadata/game-variants/' . rawurlencode($id));
    }

    public function impulses()
    {
        return $this->get('/metadata/h5/metadata/impulses');
    }

    public function mapVariant($id)
    {
        return $this->get('/metadata/h5/metadata/map-variants/' . rawurlencode($id));
    }

    public function maps()
    {
        return $this->get('/metadata/h5/metadata/maps');
    }

    public function medals()
    {
        return $this->get('/metadata/h5/metadata/medals');
    }

    public function playlists()
    {
        return $this->get('/metadata/h5/metadata/playlists');
    }

    public function requisition($id)
    {
        return $this->get('/metadata/h5/metadata/requisitions/' . rawurlencode($id));
    }

    public function requisitionPack($id)
    {
        return $this->get('/metadata/h5/metadata/requisition-packs/' . rawurlencode($id));
    }

    public function seasons()
    {
        return $this->get('/metadata/h5/metadata/seasons');
    }

    public function skulls()
    {
        return $this->get('/metadata/h5/metadata/skulls');
    }

    public function spartanRanks()
    {
        return $this->get('/metadata/h5/metadata/spartan-ranks');
    }

    public function teamColors()
    {
        return $this->get('/metadata/h5/metadata/team-colors');
    }

    public function vehicles()
    {
        return $this->get('/metadata/h5/metadata/vehicles');
    }

    public function weapons()
    {
        return $this->get('/metadata/h5/metadata/weapons');
    }
}
