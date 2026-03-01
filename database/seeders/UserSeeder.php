<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'sage@auralumens.com'],
            [
                'name' => 'Sage',
                'password' => 'sage',
                'email_verified_at' => now(),
            ]
        );
    }
}
