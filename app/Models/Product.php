<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['slug', 'name', 'description', 'first_price', 'end_price', 'is_published', 'is_recommendation', 'is_best_seller', 'tenant_id'];

    public function scopeIsPublished($query)
    {
        $query->where('is_published', true);
    }

    public function scopeIsRecommendation($query)
    {
        $query->where('is_recommendation', true);
    }

    public function scopeIsBestSeller($query)
    {
        $query->where('is_best_seller', true);
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

    public function ProductCoverUrl(): Attribute
    {
        $mediaItems = $this->getFirstMediaUrl('product', 'thumb');

        return Attribute::make(fn () => $mediaItems ? $mediaItems : asset('assets/img/photos/product.jpg'));
    }
}
