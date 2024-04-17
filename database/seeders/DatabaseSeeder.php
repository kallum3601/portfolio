<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'username' => 'guest',
            'password' => Hash::make('password'),
            'admin' => 0,
        ]);

        User::factory()->create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'admin' => 1,
        ]);
    }
}
