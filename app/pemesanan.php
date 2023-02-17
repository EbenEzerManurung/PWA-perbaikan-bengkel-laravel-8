<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';
    protected $guarded = [];
    protected $primaryKey = 'id_pemesanan';
    protected $foreignKey = 'spare_part_id';

    protected $fillable = [
        'no_polis','nama_customer','no_customer','alamat_customer','merk','status', 'spare_part_id'
    ];



    public function data_spare_part()
    {
        return $this->belongsTo('App\spare_part', 'spare_part_id');
    }
    
    public function data_perintahperbaikan()
    {
        return $this->hasMany('App\perintah_perbaikan', 'pemesanan_id');
    }

}