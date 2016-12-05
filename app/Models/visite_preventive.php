<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class visite_preventive
 * @package App\Models
 * @version November 30, 2016, 9:10 am UTC
 */
class visite_preventive extends Model
{
    use SoftDeletes;

    public $table = 'visite_preventive';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'site_id',
        'date_visite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'site_id' => 'integer'
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
    public function site()
    {
        return $this->belongsTo(\App\Models\Site::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usersHasVisitePreventives()
    {
        return $this->hasMany(\App\Models\UsersHasVisitePreventive::class);
    }
}
