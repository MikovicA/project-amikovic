@extends('layouts.app')


@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h2 class="text-2xl font-semibold mb-6">Vaše narudžbine</h2>

    @if($narudzbine->isEmpty())
        <p>Nemate nijednu narudžbinu.</p>
    @else
        <div class="space-y-4">
            @foreach($narudzbine as $narudzbina)
                <div class="border rounded p-4 bg-white shadow">
                    <p><strong>Vino:</strong> {{ $narudzbina->vino->naziv }}</p>
                    <p><strong>Količina:</strong> {{ $narudzbina->kolicina }}</p>
                    <p><strong>Datum porudžbine:</strong> {{ $narudzbina->created_at->format('d.m.Y.') }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection