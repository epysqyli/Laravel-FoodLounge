@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-1 pt-4 rounded border tagliatesto">
            <div class="col-5">
                <div class="row">
                    <div class="col-6 offset-3">
                        <img class="img-fluid w-100 mt-1 mb-2 rounded shadow-sm"
                            src={{ asset('storage/' . Auth::user()->profile_image) }} alt="">
                    </div>
                </div>
                <div class="row">
                    <a class="col-6 offset-3 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.foods.index', Auth::user()->id) }}">
                        <h4 class="text-center">Gestione prodotti</h4>
                    </a>
                </div>
                <div class="row">
                    <a class="col-6 offset-3 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.types.index', Auth::user()->id) }}">
                        <h4 class="text-center">Gestione tipologie</h4>
                    </a>
                </div>
                <div class="row">
                    <a class="col-6 offset-3 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.orders.index', Auth::user()->id) }}">
                        <h4 class="text-center">Storico ordini</h4>
                    </a>
                </div>
                <div class="row">
                    <a class="col-6 offset-3 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.users.edit', Auth::user()->id) }}">
                        <h4 class="text-center">Modifica i tuoi dati</h4>
                    </a>
                </div>
            </div>
            <div class="col-7">
                <div class="contenent-img-cover">
                    <img class="rounded shadow img_cover_admin_home" src={{ asset('storage/' . Auth::user()->cover_image) }} alt="John"
                    style="">
                </div>                
                <div class="">
                    <p>Nome attività: <span > <strong>{{ Auth::user()->name }}</strong> </span> 
                    <p>Indirizzo: <span><strong>{{ Auth::user()->address }}</strong></span> </p>
                    <p>Partita IVA: <span><strong>{{ Auth::user()->vat }}</strong></span></p>
                    <p>Email: <span><strong>{{ Auth::user()->email }}</strong></span></p>
                    <p>Descrizione: <span><strong>{{ Auth::user()->description }}</strong></span></p>                            
                </div>             
            </div>
        </div>
    </div>
@endsection
