@extends("layouts.public")

@section("title", "Katalog vina")

@section("content")
<div class="container">
    <h2 class="text-center mb-5">Katalog vina</h2>
    <div class="row">
        @foreach($vina as $vino)
            <div class="col-md-4 col-sm-6 p-3">
                <div class="image-tile outer-title text-center">
                     @if ($vino->slika && file_exists(public_path('storage/' . $vino->slika)))
                        <img src="{{ asset('storage/' . $vino->slika) }}" alt="{{ $vino->naziv }}" style="max-height: 250px; object-fit: cover;">
                    @else
                        <img src="{{ asset('storage/slike/noimage.jpg') }}" alt="Nema slike" style="max-height: 250px; object-fit: cover;">
                    @endif
                    <div class="title">
                        <h5 class="mb-1">{{ $vino->naziv }}</h5>
                        <span class="sub">{{ $vino->cijena }} €</span>
                        <p>{{ Str::limit($vino->opis, 100) }}</p>
                        <a href="{{ route('vino.show', $vino->id) }}" class="btn btn-sm btn-primary mt-2">Detaljnije</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
