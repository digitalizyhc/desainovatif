<?php

namespace App\Models;

use Illuminate\Support\Str;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    // generate domain
    public static function booted()
    {
        static::created(function ($tenant) {
            $domain = Str::slug($tenant->name) . '.' . config('tenancy.central_domains')[0];
            $tenant->createDomain([
                'domain' => $domain,
            ]);
        });
    }

    public static function getCustomColumns(): array
    {
        return [
            'id',
            'name',
            'user_id',
        ];
    }

    public function messages()
    {
        return $this->morphMany(Message::class, 'messageable');
    }
}
