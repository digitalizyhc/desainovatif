<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Tour extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['slug', 'name', 'category', 'description', 'is_published', 'tenant_id'];

    public function scopeIsPublished($query)
    {
        $query->where('is_published', true);
    }

    public function scopeFilter(Builder $query, $filters): void
    {
        // search
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query->where(
            fn ($query) =>
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
        ));
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->height(600)
            ->sharpen(10)
            ->nonQueued()
            ->nonOptimized();
    }

    /**
     * Get the tour url attribute.
     */
    public function CoverUrl(): Attribute
    {
        $mediaItems = $this->getFirstMediaUrl('tour', 'thumb');

        return Attribute::make(fn () => $mediaItems ? $mediaItems : asset('assets/img/photos/news.jpg'));
    }
}
