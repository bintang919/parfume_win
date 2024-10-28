<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_t')->insert([
            [
                'username' => 'superadmin',
                'password' => Hash::make('winparfume'), // Hash password
                'is_active' => true,
                'is_deleted' => false,
                'created_date' => now(),
                'created_by' => 'admin',
            ],
        ]);
    }
}
