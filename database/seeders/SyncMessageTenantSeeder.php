<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\Message;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SyncMessageTenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenantId = Tenant::pluck('id');
        Message::whereIn('messageable_id', $tenantId)->update([
            'messageable_type' => Tenant::class,
        ]);
    }
}
