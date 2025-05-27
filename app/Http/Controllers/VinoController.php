<?php

namespace App\Http\Controllers;

use App\Models\Vino;

use Illuminate\Http\Request;

class VinoController extends Controller
{
    public function index()
    {
     $vina = Vino::where('featured', true)->get();
     return view('welcome', compact('vina'));
    }
    public function show($id)
    {
        $vino = Vino::findOrFail($id);
        return view('katalog.show', compact('vino'));
    }
}
