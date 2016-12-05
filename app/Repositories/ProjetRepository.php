<?php

namespace App\Repositories;

use App\Models\Projet;
use InfyOm\Generator\Common\BaseRepository;

class ProjetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designation',
        'client_id',
        'contrat'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Projet::class;
    }
    public function Allclient()
    {
        return \App\Models\Client::pluck('designation','id');
    }
}
