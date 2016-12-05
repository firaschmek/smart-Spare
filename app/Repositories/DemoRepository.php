<?php

namespace App\Repositories;

use App\Models\Demo;
use InfyOm\Generator\Common\BaseRepository;

class DemoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'last'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Demo::class;
    }
}
