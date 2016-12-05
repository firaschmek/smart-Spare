<?php

namespace App\Repositories;

use App\Models\attribut_article;
use InfyOm\Generator\Common\BaseRepository;

class attribut_articleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designation'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return attribut_article::class;
    }
}
