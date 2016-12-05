<?php

namespace App\Repositories;

use App\Models\site;
use InfyOm\Generator\Common\BaseRepository;

class siteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designation',
        'adresse'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return site::class;
    }
}
