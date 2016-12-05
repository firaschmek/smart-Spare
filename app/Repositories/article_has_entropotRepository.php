<?php

namespace App\Repositories;

use App\Models\article_has_entropot;
use InfyOm\Generator\Common\BaseRepository;

class article_has_entropotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article_id',
        'entropot_id',
        'quantite'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return article_has_entropot::class;
    }

    public function allentropot()
    {
        return \App\Models\entropot::pluck('adresse','id');
    }
    public function allarticle()
    {
         return \App\Models\article::pluck('designation','id');
    }
}
