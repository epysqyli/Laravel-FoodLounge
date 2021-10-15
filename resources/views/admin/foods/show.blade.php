@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2 mb-5">{{ $food->name }}</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-4">
                <img class="rounded w-100"
                    src={{ $food->image[0] == 'h' ? $food->image : asset('storage/' . $food->image) }} alt="">
            </div>
            <div class="col-8">
                <table class="table table-light table-striped">
                    <tr>
                        <th>Id Prodotto
                        <th>
                        <td>{{ $food->id }}</td>
                    </tr>
                    <tr>
                        <th>Tipologia prodotto
                        <th>
                        <td>{{ $food->type ? $food->type->name : 'Nessuna categoria assegnata' }}</td>
                    </tr>
                    <tr>
                        <th>Prezzo
                        <th>
                        <td>{{ $food->price }} &euro;</td>
                    </tr>
                    <tr>
                        <th>Descrizione
                        <th>
                        <td>{{ $food->description }}</td>
                    </tr>
                    <tr>
                        <th>Disponibilà
                        <th>
                        <td>{{ $food->visible ? 'Sì' : 'No' }}</td>
                    </tr>
                    @if ($food->additional_details)
                        <tr>
                            <th>Dettagli addizionali
                            <th>
                            <td>{{ $food->additional_details }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>

        <a href="{{ Route('admin.foods.index') }}" class="btn btn-secondary text-white">
            <span>Torna indietro</span>
        </a>
    </div>
@endsection
