<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MBatch
 *
 * @property $batchid
 * @property $grammid
 * @property $man_dt
 * @property $exp_dt
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MBatch extends Model
{
    public static function getDataByGrammid($grammid)
    {
        return self::where('grammid', $grammid)->first();
    }

    static $rules = [
		'batchid' => 'required',
		'grammid' => 'required',
		'man_dt' => 'required',
		'exp_dt' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['batchid','grammid','man_dt','exp_dt'];
    protected $table = 'm_batch';
    public $timestamps = false;
    protected $primaryKey = 'batchid';
}
