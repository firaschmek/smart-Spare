<?php

namespace App\Repositories;

use App\Models\entreprise;
use InfyOm\Generator\Common\BaseRepository;

class entrepriseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'administrateur',
        'adresse',
        'ville',
        'code_post',
        'tel',
        'fax',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return entreprise::class;
    }
}
