<?php

namespace App\Repositories;

use App\Models\categorie_article;
use InfyOm\Generator\Common\BaseRepository;

class categorie_articleRepository extends BaseRepository
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
        return categorie_article::class;
    }
}
