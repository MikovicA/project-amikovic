@extends("layouts.public")

@section("title", $vino->naziv)

@section("content")
<div class="container mx-auto p-6 max-w-4xl bg-white rounded shadow">
    <h1 class="text-3xl font-bold mb-4">{{ $vino->naziv }}</h1>
    
    <img src="{{ asset('storage/' . $vino->slika) }}" alt="{{ $vino->naziv }}" class="w-full max-w-md mx-auto mb-6 rounded shadow">
    
    <p class="mb-3"><strong>Opis:</strong> {{ $vino->opis }}</p>
    <p class="mb-4"><strong>Cijena:</strong> {{ $vino->cijena }} €</p>
    
    <form action="{{ route('narudzbina.store', $vino->id) }}" method="POST" class="mb-6">
        @csrf
        <label for="kolicina" class="block mb-2 font-semibold">Količina:</label>
        <input type="number" name="kolicina" id="kolicina" value="1" min="1" class="border p-2 rounded mb-4 w-24">

        <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white px-6 py-2 rounded transition">
            Naruči
        </button>
    </form>

    <a href="{{ url()->previous() }}" class="btn btn-secondary">Nazad</a>
        
    </a>
</div>
@endsection
