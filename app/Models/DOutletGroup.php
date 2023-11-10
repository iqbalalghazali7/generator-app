<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DOutletGroup
 *
 * @property $ogrpid
 * @property $name
 * @property $city
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DOutletGroup extends Model
{

    static $rules = [
		'ogrpid' => 'required',
		'name' => 'required',
		'city' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ogrpid','name','city'];
    protected $table = 'd_outlet_group';
    public $timestamps = false;
    protected $primaryKey = 'ogrpid';


}
