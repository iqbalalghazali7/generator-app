<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MPackage
 *
 * @property $packid
 * @property $name
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MPackage extends Model
{

    static $rules = [
		'packid' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['packid','name'];
    protected $table = 'm_package';
    public $timestamps = false;
    protected $primaryKey = 'packid';


}
