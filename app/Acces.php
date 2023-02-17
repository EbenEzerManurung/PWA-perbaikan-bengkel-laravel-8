<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acces extends Model
{
	protected $table = 'access';
    // Initialize
    protected $fillable = [
        'user', 'kelola_akun',  'spare_part', 'pemesanan', 'perintah_perbaikan','perbaikan', 'survey_layanan'
        
    ];
}
