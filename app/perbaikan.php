<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perbaikan extends Model
{
    protected $table = 'perbaikan';
    protected $primaryKey = 'id_perbaikan';
    protected $foreignKey = 'perintah_id';

    protected $fillable = [
        'nama_mekanik','status', 'perintah_id'
    ];




    public function perintah()
    {
        return $this->belongsTo('App\perintah_perbaikan', 'perintah_id');
    }
}

