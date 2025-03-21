<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Writer One',
                'email' => 'writer1@example.com',
                'password' => Hash::make('password'),
                'role' => 'writer',
            ],
            [
                'name' => 'Writer Two',
                'email' => 'writer2@example.com',
                'password' => Hash::make('password'),
                'role' => 'writer',
            ],
            [
                'name' => 'Visitor User',
                'email' => 'visitor@example.com',
                'password' => Hash::make('password'),
                'role' => 'visitor',
            ],
        ]);
    }
}
