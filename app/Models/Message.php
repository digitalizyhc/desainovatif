<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'message', 'is_read', 'messageable_type', 'messageable_id'];

    public function messageable()
    {
        return $this->morphTo();
    }

    public function scopeFilter(Builder $query, $filters): void
    {
        // search
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query->where(
            fn ($query) =>
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('message', 'like', '%' . $search . '%')
        ));
    }
}
