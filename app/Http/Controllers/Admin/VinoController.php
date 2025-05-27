<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vino;
use App\Models\Kategorija;

class VinoController extends Controller
{
    public function index()
    {
        $vina = Vino::with('kategorija')->latest()->paginate(10);
        return view('admin.vina.index', compact('vina'));
    }

    public function create()
    {
        $kategorije = Kategorija::all();
        return view('admin.vina.create', compact('kategorije'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'naziv' => 'required|string|max:100',
            'opis' => 'required|string',
            'cijena' => 'required|numeric|min:0',
            'kategorija_id' => 'required|exists:kategorijas,id',
            'slika' => 'nullable|image|max:2048',
        ]);

        $slikaPath = null;
        if ($request->hasFile('slika')) {
            $slikaPath = $request->file('slika')->store('slike', 'public');
        }

        Vino::create([
            'naziv' => $request->naziv,
            'opis' => $request->opis,
            'cijena' => $request->cijena,
            'kategorija_id' => $request->kategorija_id,
            'slika' => $slikaPath,
            'featured' => $request->has('featured'),
        ]);

        return redirect()->route('admin.vina.index')->with('success', 'Vino uspješno dodato.');
    }

    public function edit(Vino $vino)
    {
        $kategorije = Kategorija::all();
        return view('admin.vina.edit', compact('vino', 'kategorije'));
    }

    public function update(Request $request, Vino $vino)
    {
        $request->validate([
            'naziv' => 'required|string|max:100',
            'opis' => 'required|string',
            'cijena' => 'required|numeric|min:0',
            'kategorija_id' => 'required|exists:kategorijas,id',
            'slika' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('slika')) {
            $slikaPath = $request->file('slika')->store('slike', 'public');
            $vino->slika = $slikaPath;
        }

        $vino->update([
            'naziv' => $request->naziv,
            'opis' => $request->opis,
            'cijena' => $request->cijena,
            'kategorija_id' => $request->kategorija_id,
            'featured' => $request->has('featured'),
        ]);

        return redirect()->route('admin.vina.index')->with('success', 'Vino uspješno ažurirano.');
    }

    public function destroy(Vino $vino)
    {
        $vino->delete();
        return redirect()->route('admin.vina.index')->with('success', 'Vino uspješno obrisano.');
    }
}
