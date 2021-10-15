@extends('layouts.app')

@section('content')
    <div class="container backend">
        <div class="row mx-1 pt-4 rounded bg-light">
            {{-- lato opzioni --}}
            <div class="col-12 col-md-4 mb-5">
                <div class="row">
                    <a class="col-10 offset-1 offset-sm-0 col-md-8 mx-auto mb-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.foods.index', Auth::user()->id) }}">
                        <h5 class="text-center">Gestione prodotti</h5>
                    </a>
                </div>
                <div class="row">
                    <a class="col-10 offset-1 offset-sm-0 col-md-8 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.types.index', Auth::user()->id) }}">
                        <h5 class="text-center">Gestione tipologie</h5>
                    </a>
                </div>
                <div class="row">
                    <a class="col-10 offset-1 offset-sm-0 col-md-8 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.orders.index', Auth::user()->id) }}">
                        <h5 class="text-center">Gestione ordini</h5>
                    </a>
                </div>
                <div class="row">
                    <a class="col-10 offset-1 offset-sm-0 col-md-8 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.users.edit', Auth::user()->id) }}">
                        <h5 class="text-center">Modifica profilo</h5>
                    </a>
                </div>
            </div>

            {{-- lato img cover e riepilogo dati --}}
            <div class="col-12 col-md-8">
                <img class="img-fluid rounded shadow-sm" src={{ asset('storage/' . Auth::user()->cover_image) }}
                    alt="cover image">

                <div class="row mt-5 shadow alert-dark">
                    <div class="col-10 offset-1 offset-md-0 col-md-4">
                        <img class="img w-100 d-block rounded shadow-sm" src={{ asset('storage/' . Auth::user()->profile_image) }}
                            alt="cover image">
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="col rounded">
                            <p class="pt-3">Nome attività:
                                <span><strong>{{ Auth::user()->name }}</strong></span>
                            </p>
                            <p>Indirizzo: <span><strong>{{ Auth::user()->address }}</strong></span> </p>
                            <p>Email: <span><strong>{{ Auth::user()->email }}</strong></span> </p>
                            <p>Partita IVA: <span><strong>{{ Auth::user()->vat }}</strong></span> </p>
                            <p>Descrizione: <span><strong>{{ Auth::user()->description }}</strong></span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
