<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class article_has_entropot
 * @package App\Models
 * @version November 30, 2016, 9:09 am UTC
 */
class article_has_entropot extends Model
{
    use SoftDeletes;

    public $table = 'article_has_entropot';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'article_id',
        'entropot_id',
        'quantite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article_id' => 'integer',
        'entropot_id' => 'integer',
        'quantite' => 'string'
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
    public function entropot()
    {
        return $this->belongsTo(\App\Models\Entropot::class);
    }
}
