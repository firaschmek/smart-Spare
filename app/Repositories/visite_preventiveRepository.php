<?php

namespace App\Repositories;

use App\Models\visite_preventive;
use InfyOm\Generator\Common\BaseRepository;

class visite_preventiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'site_id',
        'date_visite'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return visite_preventive::class;
    }
}
