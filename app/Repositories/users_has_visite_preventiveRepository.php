<?php

namespace App\Repositories;

use App\Models\users_has_visite_preventive;
use InfyOm\Generator\Common\BaseRepository;

class users_has_visite_preventiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'visite_preventive_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return users_has_visite_preventive::class;
    }
     public function Allusers()
    {
        return \App\Models\Users::pluck('name','id');
    }
     public function Allvisite_preventive()
    {
        return \App\Models\visite_preventive::pluck('date_visite','id');
    }
}
