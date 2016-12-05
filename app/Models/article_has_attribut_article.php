<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class article_has_attribut_article
 * @package App\Models
 * @version November 30, 2016, 9:09 am UTC
 */
class article_has_attribut_article extends Model
{
    use SoftDeletes;

    public $table = 'article_has_attribut_article';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'article_id',
        'attribut_article_id',
        'valeur'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article_id' => 'integer',
        'attribut_article_id' => 'integer',
        'valeur' => 'string'
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
    public function article()
    {
        return $this->belongsTo(\App\Models\Article::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function attributArticle()
    {
        return $this->belongsTo(\App\Models\AttributArticle::class);
    }
}
