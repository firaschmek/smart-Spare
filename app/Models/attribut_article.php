<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class attribut_article
 * @package App\Models
 * @version November 30, 2016, 9:06 am UTC
 */
class attribut_article extends Model
{
    use SoftDeletes;

    public $table = 'attribut_article';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'designation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'designation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function articleHasAttributArticles()
    {
        return $this->hasMany(\App\Models\ArticleHasAttributArticle::class);
    }
}
