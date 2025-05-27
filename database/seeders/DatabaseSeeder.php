<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //bitno ko je prvi odje a ko sledeci ispod jer ocemo prvo jedno da cuvamo pa drugo 
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            KategorijaSeeder::class,
            VinoSeeder::class,
            NarudzbinaSeeder::class,
    ]);
        
    }
}
