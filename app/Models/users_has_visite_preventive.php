<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users_has_visite_preventive
 * @package App\Models
 * @version December 5, 2016, 10:00 pm UTC
 */
class users_has_visite_preventive extends Model
{
    use SoftDeletes;

    public $table = 'users_has_visite_preventive';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'users_id',
        'visite_preventive_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'users_id' => 'integer',
        'visite_preventive_id' => 'integer'
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function visitePreventive()
    {
        return $this->belongsTo(\App\Models\VisitePreventive::class);
    }
}
