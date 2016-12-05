<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class entropot
 * @package App\Models
 * @version November 30, 2016, 9:07 am UTC
 */
class entropot extends Model
{
    use SoftDeletes;

    public $table = 'entropot';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'adresse',
        'emplacement',
        'capacite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'adresse' => 'string',
        'emplacement' => 'string',
        'capacite' => 'string'
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
    public function articleHasEntropots()
    {
        return $this->hasMany(\App\Models\ArticleHasEntropot::class);
    }
}
