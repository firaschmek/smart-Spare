<?php

namespace App\Repositories;

use App\Models\Client;
use InfyOm\Generator\Common\BaseRepository;

class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designation',
        'code_client'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Client::class;
    }
}
