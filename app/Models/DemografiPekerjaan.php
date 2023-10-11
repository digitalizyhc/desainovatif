<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemografiPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'demografi_pekerjaan';

    protected $fillable = ['belum_bekerja', 'rumah_tangga', 'pelajar', 'wiraswasta', 'buruh', 'pns', 'karyawan', 'petani', 'other', 'total', 'tenant_id'];
}
