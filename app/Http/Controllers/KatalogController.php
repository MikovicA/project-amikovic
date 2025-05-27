<?php

namespace App\Http\Controllers;

use App\Models\Vino;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $vina = Vino::all(); // svi proizvoidi odjendom da se prikaz    
        return view('katalog.index', compact('vina'));
    }
}
