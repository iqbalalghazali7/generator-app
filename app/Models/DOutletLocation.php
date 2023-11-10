<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DOutletLocation
 *
 * @property $locid
 * @property $ogrpid
 * @property $name
 * @property $address
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DOutletLocation extends Model
{

    static $rules = [
		'locid' => 'required',
		'ogrpid' => 'required',
		'name' => 'required',
		'address' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['locid','ogrpid','name','address'];
    protected $table = 'd_outlet_location';
    public $timestamps = false;
    protected $primaryKey = 'locid';


}
