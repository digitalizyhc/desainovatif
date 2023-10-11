<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the tenant that owns the user.
     */
    function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'id', 'user_id');
    }

    // is admin
    public function isAdmin(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->hasRole('super admin'),
        );
    }

    // is Tenant
    public function isTenant(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->hasRole('tenant'),
        );
    }

    public function messages()
    {
        return $this->morphMany(Message::class, 'messageable');
    }

    /**
     * Conversion image
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->height(600)
            ->sharpen(10)
            ->nonQueued()
            ->nonOptimized();
    }

    /**
     * Get the avatar url attribute.
     */
    public function avatarUrl(): Attribute
    {
        $mediaItems = $this->getFirstMediaUrl('avatar', 'thumb');

        return Attribute::make(fn () => $mediaItems ? $mediaItems : asset('assets/img/avatars/avatar.jpeg'));
    }
}
