<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DQrCode
 *
 * @property $qrcode
 * @property $qrid
 * @property $qrcode_name
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DQrCode extends Model
{

    static $rules = [
		'qrcode' => 'required',
		'qrid' => 'required',
		'qrcode_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['qrcode','qrid','qrcode_name'];
    protected $table = 'd_qr_code';
    public $timestamps = false;
    protected $primaryKey = 'qrcode';

    public function qr()
    {
        return $this->belongsTo(DQr::class, 'qrid', 'id');
    }

}
