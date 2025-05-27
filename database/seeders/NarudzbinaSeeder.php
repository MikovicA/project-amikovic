<?php

namespace Database\Seeders;
use App\Models\Narudzbina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NarudzbinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $narudzbina = new Narudzbina();
        $narudzbina->user_id = 1;
        $narudzbina->vino_id = 1;
        $narudzbina->kolicina = 2;
        $narudzbina->save();

        $narudzbina = new Narudzbina();
        $narudzbina->user_id = 1;
        $narudzbina->vino_id = 2;
        $narudzbina->kolicina = 1;
        $narudzbina->save();

        $narudzbina = new Narudzbina();
        $narudzbina->user_id = 2;
        $narudzbina->vino_id = 1;
        $narudzbina->kolicina = 3;
        $narudzbina->save();

        $narudzbina = new Narudzbina();
        $narudzbina->user_id = 2;
        $narudzbina->vino_id = 3;
        $narudzbina->kolicina = 1;
        $narudzbina->save();

        $narudzbina = new Narudzbina();
        $narudzbina->user_id = 3;
        $narudzbina->vino_id = 2;
        $narudzbina->kolicina = 4;
        $narudzbina->save();
    }
}
