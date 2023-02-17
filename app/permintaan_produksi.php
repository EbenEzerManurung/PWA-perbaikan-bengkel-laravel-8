<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spare_partsi extends Model
{
    protected $table = 'spare_partsi';

    protected $fillable = [
        'permintaanproduk_id',  'part_no', 'part_name', 'customer', 'qty' , 'status', 'date'
    ];

    public function spare_part()
    {
        return $this->belongsTo(spare_part::class , 'permintaanproduk_id')  ;
       
    	
    }
       
    }

