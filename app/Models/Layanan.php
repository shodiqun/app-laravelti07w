<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    
    protected $table = 'layanan';

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi',
        'jenis_layanan_id',
        'total_biaya',
        'rating',
    ];

    public function detail_layanans()
    {
        return $this->hasMany(DetailLayanan::class, 'layanan_id');
    }
}
