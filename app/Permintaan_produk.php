<?php

namespace App;

use App\Support\UserCollection;
use Illuminate\Database\Eloquent\Model;

class spare_part extends Model
{
    protected $table = 'spare_part';

    protected $fillable = [
        'order_no',
        'part_no',
        'part_name',
        'customer',
        'qty',
        'uom',
        'date',
        'status',
        'keterangan'
    ];

    // public function spare_partsi()
    // {
    //     return $this->hasMany('App\spare_partsi');
    // }

    // public function produk_keluar()
    // {
    // 	return $this->belongsTo(Produk_keluar::class);
    // }

    public function produk_keluar()
    {
    	return $this->hasMany(Produk_keluar::class);
    }
}
