<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class entreprise
 * @package App\Models
 * @version November 30, 2016, 9:10 am UTC
 */
class entreprise extends Model
{
    use SoftDeletes;

    public $table = 'entreprise';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'administrateur',
        'adresse',
        'ville',
        'code_post',
        'tel',
        'fax',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'administrateur' => 'string',
        'adresse' => 'string',
        'ville' => 'string',
        'code_post' => 'string',
        'tel' => 'string',
        'fax' => 'string',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
