<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExampleVillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'ardi.desa@gmail.com';
        // delete user and tenant
        $ardi = User::whereEmail($email)->first();

        if ($ardi) {
            $ardi->tenant->domains()->delete();
            $ardi->tenant->delete();
            $ardi->delete();
        }

        $user = User::create([
            'name' => 'Ardi Rizqiansyah',
            'email' => $email,
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('tenant');

        $user->tenant()->create([
            'name' => 'Desa',
            'user_id' => $user->id,
        ]);
    }
}
