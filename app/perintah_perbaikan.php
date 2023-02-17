<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perintah_perbaikan extends Model
{
    protected $table = 'perintah_perbaikan';
    protected $primaryKey = 'id_perintah';
    protected $foreignKey = 'pemesanan_id';

    protected $fillable = [
        'nama_mekanik','qty', 'status', 'pemesanan_id'
    ];


    

    public function pemesanan()
    {
        return $this->belongsTo('App\pemesanan', 'pemesanan_id');
    }
}

