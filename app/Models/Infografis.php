<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    use HasFactory;

    protected $table = 'infografis';

    protected $fillable = ['luas_tanah', 'deskripsi_luas_tanah', 'luas_kas', 'deskripsi_luas_kas', 'luas_dhkp', 'deskripsi_luas_dhkp', 'penduduk_laki_laki', 'penduduk_perempuan', 'jumlah_penduduk', 'tenant_id'];
}
