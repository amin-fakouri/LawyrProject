<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'username' => 'lw_admin',
            'password' => Hash::make('lw_admin123'),
            'role' => 'lawyer',
        ]);

        DB::table('users')->insert([
            'username' => 't_admin',
            'password' => Hash::make('t_admin123'),
            'role' => 'trainee',
        ]);
    }
}
