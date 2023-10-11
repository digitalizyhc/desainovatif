<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminLocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if local env
        if (app()->environment('local')) {
            // create admin
            $this->createAdmin();
        }
    }

    /**
     * Create admin.
     */
    private function createAdmin(): void
    {
        $email = 'admin@admin.com';

        $user = User::firstOrCreate([
            'email' => $email
        ], [
            'name' => 'Administator',
            'email' => $email,
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('super admin');
    }
}
