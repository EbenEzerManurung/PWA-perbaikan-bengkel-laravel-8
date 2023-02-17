<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spare_part extends Model
{
    use HasFactory;

    protected $table = 'spare_part';
    protected $guarded = [];
    protected $primaryKey = 'id_spare_part';

    protected $fillable = [
        'jenis','qty'
    ];

    public function spare_part()
    {
        return $this->hasMany('App\pemesanan', 'spare_part_id');
    }
}

