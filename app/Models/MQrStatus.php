<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MQrStatus
 *
 * @property $qrstid
 * @property $name
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MQrStatus extends Model
{

    static $rules = [
		'qrstid' => 'required',
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['qrstid','name'];
    protected $table = 'm_qr_status';
    public $timestamps = false;
    protected $primaryKey = 'qrstid';


}
