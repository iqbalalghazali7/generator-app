<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MFlavor
 *
 * @property $fl_id
 * @property $name
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MFlavor extends Model
{

    static $rules = [
		'fl_id' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fl_id','name'];
    protected $table = 'm_flavor';
    public $timestamps = false;
    protected $primaryKey = 'fl_id';



}
