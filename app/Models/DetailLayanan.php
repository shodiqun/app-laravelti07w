<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    use HasFactory;
    
    protected $table = 'detail_layanan';

    protected $fillable = [
        'pekerjaan',
        'biaya',
        'layanan_id',
        'pj_montir_id',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }

    public function montir()
    {
        return $this->belongsTo(Montir::class, 'pj_montir_id');
    }
}
