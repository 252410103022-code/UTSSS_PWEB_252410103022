<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DemoUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@pinkbakery.com'],
            [
                'name' => 'Admin PinkBakery',
                'password' => Hash::make('pinkbakery123'),
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }
}