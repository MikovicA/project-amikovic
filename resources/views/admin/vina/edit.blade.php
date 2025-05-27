@extends('layouts.admin')


@section('content')
<h1 class="text-xl font-bold mb-4">Izmeni vino</h1>

<form action="{{ route('admin.vina.update', ['vino' => $vino->id]) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <input type="text" name="naziv" value="{{ old('naziv', $vino->naziv) }}" required class="border p-2 w-full mb-4">

    <input type="number" step="0.01" name="cijena" value="{{ old('cijena', $vino->cijena) }}" required class="border p-2 w-full mb-4">

    <textarea name="opis" required class="border p-2 w-full mb-4">{{ old('opis', $vino->opis) }}</textarea>

    <select name="kategorija_id" class="border p-2 w-full mb-4">
        @foreach($kategorije as $kategorija)
            <option value="{{ $kategorija->id }}" {{ $kategorija->id == $vino->kategorija_id ? 'selected' : '' }}>
                {{ $kategorija->vrsta }}
            </option>
        @endforeach
    </select>

    <input type="file" name="slika" class="mb-4">

    <div class="mb-4">
        <label>
            <input type="checkbox" name="featured" {{ $vino->featured ? 'checked' : '' }}> Ponuda meseca
        </label>
    </div>

    <button type="submit" class="btn btn-success">Ažuriraj</button>
</form>
@endsection
