<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MProduct
 *
 * @property $prodid
 * @property $name
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MProduct extends Model
{

    static $rules = [
		'prodid' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prodid','name'];
    protected $table = 'm_product';
    public $timestamps = false;
    protected $primaryKey = 'prodid';


}
