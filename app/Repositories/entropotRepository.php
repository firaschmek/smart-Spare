<?php

namespace App\Repositories;

use App\Models\entropot;
use InfyOm\Generator\Common\BaseRepository;

class entropotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'adresse',
        'emplacement',
        'capacite'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return entropot::class;
    }
}
