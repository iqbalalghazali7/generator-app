<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MProductGrammage
 *
 * @property $grammid
 * @property $prodid
 * @property $fl_id
 * @property $packid
 * @property $gram
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MProductGrammage extends Model
{

    static $rules = [
		'grammid' => 'required',
		'prodid' => 'required',
		'fl_id' => 'required',
		'packid' => 'required',
		'gram' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['grammid','prodid','fl_id','packid','gram'];
    protected $table = 'm_product_grammage';
    public $timestamps = false;
    protected $primaryKey = 'grammid';

     //Relasi ke tabel lain jika diperlukan
    public function product()
    {
        return $this->belongsTo(MProduct::class, 'prodid', 'id');
    }

    public function flavor()
    {
         return $this->belongsTo(MFlavor::class, 'fl_id', 'id');
    }

    public function package()
    {
       return $this->belongsTo(MPackage::class, 'packid', 'id');
    }

}
