<?php

namespace Database\Seeders;
use App\Models\Vino;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vino = new Vino();
        $vino->naziv = "Planinska Krv";
        $vino->opis = "Jake note sa sjevernih planina Crne Gore koje lijece tugu";
        $vino->cijena = "20";
        $vino->slika = "planinskakrv.jpg";
        $vino->featured = true;
        $vino->kategorija_id = 1;
        $vino->save();

        $vino = new Vino();
        $vino->naziv = "Morksi san";
        $vino->opis = "Bijelo vino sa primorja iz berba punih joda i juga vjetra";
        $vino->cijena = "24";
        $vino->slika = "morskisan.jpg";
        $vino->featured = true;
        $vino->kategorija_id = 2;
        $vino->save();

           $vino = new Vino();
        $vino->naziv = "Snijezna pahuljica";
        $vino->opis = "Bijelo ledeno vino, koje se godinama hladilo i odmaralo u koritu rijeke Morace";
        $vino->cijena = "55";
        $vino->slika = "snijeznapahuljica.jpg";
        $vino->featured = true;
        $vino->kategorija_id = 2;
        $vino->save();

        $vino = new Vino();
        $vino->naziv = "Elixir Ljubavi";
        $vino->opis = "Crveni elixir koji budi emocije i raspolozenje svojim bogatim slatkastim ukusom";
        $vino->cijena = "29";
        $vino->slika = "elixirljubavi.jpg";
        $vino->featured = true;
        $vino->kategorija_id = 3;
        $vino->save();
    }
}
