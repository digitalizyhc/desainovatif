<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemografiPendidikan extends Model
{
    use HasFactory;

    protected $table = 'demografi_pendidikan';

    protected $fillable = ['belum_sekolah', 'sd', 'sltp', 'slta', 'diploma', 'sarjana', 'total', 'tenant_id'];
}
