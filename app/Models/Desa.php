<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desa extends Model
{
    use HasFactory;

    protected $table = 'desa';

    protected $fillable = ['name', 'provinsi_id', 'kabupaten_id', 'kecamatan_id', 'admin_desa_id'];

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kabupaten(): BelongsTo
    {
        return $this->belongsTo(Kabupaten::class);
    }

    public function provinsi(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'admin_desa_id');
    }

    /**
     * Scope Filter
     */
    public function scopeFilter(Builder $query, $filters): void
    {
        // search
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query->where(
            fn ($query) =>
            $query->where('name', 'like', '%' . $search . '%')
        ));

        // kecamatan
        $query->when($filters['provinsi'] ?? false, fn ($query, $provinsiId) =>
        $query->whereHas('provinsi', fn ($query) =>
        $query->whereIn('id', [$provinsiId])));
    }
}
