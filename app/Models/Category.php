<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'tenant_id'];

    public function scopeFilter(Builder $query, $filters): void
    {
        // search
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query->where(
            fn ($query) =>
            $query->where('name', 'like', '%' . $search . '%')
        ));
    }

    public function posts()
    {
        return $this->HasMany(Post::class);
    }
}
