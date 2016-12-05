<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class article
 * @package App\Models
 * @version November 30, 2016, 9:13 am UTC
 */
class article extends Model
{
    use SoftDeletes;

    public $table = 'article';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'designation',
        'code_article',
        'categorie_article_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'designation' => 'string',
        'code_article' => 'string',
        'categorie_article_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categorieArticle()
    {
        return $this->belongsTo(\App\Models\CategorieArticle::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function articleHasAttributArticles()
    {
        return $this->hasMany(\App\Models\ArticleHasAttributArticle::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function articleHasEntropots()
    {
        return $this->hasMany(\App\Models\ArticleHasEntropot::class);
    }
}
