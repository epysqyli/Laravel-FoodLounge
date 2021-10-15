@extends('layouts.app')

@section('content')
    <div class="container backend">
        <div class="row mx-1 pt-4 rounded bg-light">

            {{-- lato img profilo e bottoni/opzioni --}}
            <div class="col-12 col-md-4 mb-5">
                
                {{-- <div class="row">
                    <div class="col-10 mx-auto col-md-8">  
                        <div class="card">                                            
                            <img class="img-fluid w-100 rounded shadow-sm"
                            src={{ asset('storage/' . Auth::user()->profile_image) }} alt="">
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <a class="col-10 col-md-8 mx-auto mb-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.foods.index', Auth::user()->id) }}">
                        <h5 class="text-center">Gestione prodotti</h5>
                    </a>
                </div>
                <div class="row">
                    <a class="col-10 col-md-8 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.types.index', Auth::user()->id) }}">
                        <h5 class="text-center">Gestione tipologie</h5>
                    </a>
                </div>
                <div class="row">
                    <a class="col-10 col-md-8 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.orders.index', Auth::user()->id) }}">
                        <h5 class="text-center">Gestionale ordini</h5>
                    </a>
                </div>
                <div class="row">
                    <a class="col-10 col-md-8 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white"
                        href="{{ route('admin.users.edit', Auth::user()->id) }}">
                        <h5 class="text-center">Modifica profilo</h5>
                    </a>
                </div>
            </div>

            {{-- lato img cover e riepilogo dati --}}
            <div class="col-12 col-md-7 mx-auto ">                                
                <div class="row">                    
                    <div class="col-8 col-md-4 mx-auto alert-dark pb-2"> 
                    <span>Immagine profilo</span>
                        <div class="card">
                            <img class="img-fluid rounded shadow-sm"
                            src={{ asset('storage/' . Auth::user()->profile_image) }} alt="">
                        </div>
                    </div>                    
                    
                    <div class="col-8 col-md-8 mx-auto alert-dark pb-2 ">
                        <span>Immagine copertina</span>
                        <div class="card " style="max-width: 400px" >                                            
                            <img class="img-fluid rounded shadow-sm" 
                            src={{ asset('storage/' . Auth::user()->cover_image) }} alt="cover image">
                        </div>
                    </div>                                                                           
                    {{-- <div class="col" style="height: 300px;background-image:url('{{ asset('storage/' . Auth::user()->cover_image) }}');border-radius: 5px;" alt="cover image">
                    </div>                     --}}
                </div>               
               
                <div class="row mt-5">
                    <div class="col tagliatesto rounded shadow alert-dark">
                        <p class="pt-3">Nome attività: <span><strong>{{ Auth::user()->name }}</strong></span> </p>
                        <p>Indirizzo: <span><strong>{{ Auth::user()->address }}</strong></span> </p>
                        <p>Email: <span><strong>{{ Auth::user()->email }}</strong></span> </p>
                        <p>Partita IVA: <span><strong>{{ Auth::user()->vat }}</strong></span> </p>
                        <p>Descrizione: <span><strong>{{ Auth::user()->description }}</strong></span> </p>
                    </div> 
                </div>                               
            </div>

            {{-- offset --}}
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
