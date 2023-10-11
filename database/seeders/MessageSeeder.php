<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\Tenant;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenant = Tenant::first();

        Message::create([
            'name'      => 'budi',
            'email'     => 'budi@gmail.com',
            'message'   => Str::random(150),
            'tenant_id' => $tenant->id,
        ]);
    }
}
