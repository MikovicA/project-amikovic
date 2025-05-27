@extends('layouts.admin')

@section('content')

@if (in_array(Auth::user()->role_id, [1, 3]))
<div class="container">
    <h1 class="mb-4">Vina</h1>
    <a href="{{ route('admin.vina.create') }}" class="btn btn-primary mb-3">Dodaj novo vino</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Cijena</th>
                <th>Kategorija</th>
                <th>Istaknuto</th>
                <th>Slika</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vina as $vino)
                <tr>
                    <td>{{ $vino->naziv }}</td>
                    <td>{{ Str::limit($vino->opis, 50) }}</td>
                    <td>{{ $vino->cijena }} €</td>
                    <td>{{ $vino->kategorija->vrsta ?? '-' }}</td>
                    <td>{{ $vino->featured ? 'Da' : 'Ne' }}</td>
                    <td>
                        @if ($vino->slika && file_exists(public_path('storage/' . $vino->slika)))
                            <img src="{{ asset('storage/' . $vino->slika) }}" alt="{{ $vino->naziv }}" width="80">
                        @else
                            <img src="{{ asset('storage/slike/noimage.jpg') }}" alt="Nema slike" width="80">
                        @endif
                    </td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.vina.edit', $vino->id) }}" class="btn btn-sm btn-primary">Izmeni</a>
                        <form action="{{ route('admin.vina.destroy', $vino->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Obriši</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <div class="container mt-5 text-center">
        <h1>Niste admin ili editor</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Nazad na korisnički panel</a>
    </div>
@endif
<style>
.sidebar {
    height: 100vh; /* 100% visine viewporta */
    position: fixed; /* da ostane fiksiran sa strane i ne skroluje */
    top: 0;
    left: 0;
    /* po želji dodaj širinu sidebaru */
    width: 187px; /* ili kolika ti treba */
    overflow-y: auto; /* da možeš skrolovati ako ima puno stavki */
}
</style>
@endsection

