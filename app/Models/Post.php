<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['slug', 'title', 'body', 'is_published', 'category_id', 'tenant_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

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
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
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
     * Get the article url attribute.
     */
    public function CoverUrl(): Attribute
    {
        $mediaItems = $this->getFirstMediaUrl('article', 'thumb');

        return Attribute::make(fn () => $mediaItems ? $mediaItems : asset('assets/img/photos/news.jpg'));
    }

    public function vzt()
    {
        return visits($this);
    }

    public function visits()
    {
        return visits($this)->relation();
    }
}
