<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
            'name' => 'Admin',
            'email' => 'admin@pwa.rs',
            'password' => Hash::make('admin'),
            'role_id' => 1, // admin
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@pwa.rs',
            'password' => Hash::make('user'),
            'role_id' => 2, // user
        ]);

        User::create([
            'name' => 'Editor',
            'email' => 'editor@pwa.rs',
            'password' => Hash::make('editor'),
            'role_id' => 3, // editor
        ]);
    }
}
