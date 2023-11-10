<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DQr
 *
 * @property $qrid
 * @property $batchid
 * @property $total
 * @property $ua
 * @property $date
 * @property $ip
 * @property $kode_unik
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DQr extends Model
{

    static $rules = [
		'qrid' => 'required',
		'batchid' => 'required',
		'total' => 'required',
		'ua' => 'required',
		'date' => 'required',
		'ip' => 'required',
		'kode_unik' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['qrid','batchid','total','ua','date','ip','kode_unik'];
    protected $table = 'd_qr';
    public $timestamps = false;
    protected $primaryKey = 'qrid';

    public function qrcodes()
    {
        return $this->hasMany(DQrCode::class, 'qrid', 'id');
    }
}
