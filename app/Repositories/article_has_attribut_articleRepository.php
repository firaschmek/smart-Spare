<?php

namespace App\Repositories;

use App\Models\article_has_attribut_article;
use InfyOm\Generator\Common\BaseRepository;

class article_has_attribut_articleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article_id',
        'attribut_article_id',
        'valeur'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return article_has_attribut_article::class;
    }
    public function allArticle()
    {
        return \App\Models\article::pluck('designation','id');

    }
    public function allAttribut()
    {
        return \App\Models\attribut_article::pluck('designation','id');
    }
}
