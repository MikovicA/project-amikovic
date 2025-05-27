<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $kategorija = new Kategorija();
        $kategorija->vrsta = "Crveno";
        $kategorija->save();

        $kategorija = new Kategorija();
        $kategorija->vrsta = "Bijelo";
        $kategorija->save();

        $kategorija = new Kategorija();
        $kategorija->vrsta = "Roze";
        $kategorija->save();

        $kategorija = new Kategorija();
        $kategorija->vrsta = "Penušavo";
        $kategorija->save();

        $kategorija = new Kategorija();
        $kategorija->vrsta = "Desertno";
        $kategorija->save();
    }
}
