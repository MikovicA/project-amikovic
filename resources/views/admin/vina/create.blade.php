@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Dodaj novo vino</h1>

    <form action="{{ route('admin.vina.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="naziv" class="form-label">Naziv</label>
            <input type="text" name="naziv" class="form-control" value="{{ old('naziv') }}" required>
        </div>

        <div class="mb-3">
            <label for="cijena" class="form-label">Cijena</label>
            <input type="number" step="0.01" name="cijena" class="form-control" value="{{ old('cijena') }}" required>
        </div>

        <div class="mb-3">
            <label for="opis" class="form-label">Opis</label>
            <textarea name="opis" class="form-control" rows="4">{{ old('opis') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="kategorija_id" class="form-label">Kategorija</label>
            <select name="kategorija_id" class="form-control" required>
                @foreach ($kategorije as $kategorija)
                    <option value="{{ $kategorija->id }}">{{ $kategorija->vrsta }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="slika" class="form-label">Slika</label>
            <input type="file" name="slika" class="form-control">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="featured" class="form-check-input" id="featured">
            <label class="form-check-label" for="featured">Ponuda meseca</label>
        </div>

        <button type="submit" class="btn btn-success">Sačuvaj</button>
    </form>
</div>
@endsection
