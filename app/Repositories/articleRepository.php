<?php

namespace App\Repositories;

use App\Models\article;
use InfyOm\Generator\Common\BaseRepository;

class articleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'designation',
        'code_article',
        'categorie_article_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return article::class;
    }

    public function allCategorie()
    {
        return \App\Models\categorie_article::pluck('designation','id');
    }
}
