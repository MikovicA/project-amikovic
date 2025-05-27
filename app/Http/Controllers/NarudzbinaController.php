<?php

namespace App\Http\Controllers;

use App\Models\Narudzbina;
use App\Models\Vino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NarudzbinaController extends Controller
{
    public function store(Request $request, Vino $vino)
    {
        $request->validate([
            'kolicina' => 'required|integer|min:1'
        ]);

        Narudzbina::create([
            'user_id' => Auth::id(),
            'vino_id' => $vino->id,
            'kolicina' => $request->input('kolicina')
        ]);

        return redirect()->route('korisnik.narudzbine')->with('success', 'Uspešno ste naručili vino!');
    }
}
