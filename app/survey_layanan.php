<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class survey_layanan extends Model
{
    protected $table = 'survey_layanan';
    protected $primaryKey = 'id';
    protected $foreignKey = 'pemesanan_id';

    protected $fillable = [
        'nama_customer','tingkat_kepuasan','komentar', 'pemesanan_id'
    ];




    public function data_pemesanan()
    {
        return $this->belongsTo('App\pemesanan', 'pemesanan_id');
    }
}

