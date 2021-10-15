@extends('layouts.app')

{{-- @dd($order->foods->first()->pivot->food_units); --}}

@section('content')
    <div class="container-md">
        <div class="row">
            <div class="col">
                <h2>Dettagli dei prodotti ordinati</h2>
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th><strong>Nome prodotto</strong></th>
                            <th><strong>Unità</strong></th>
                            <th><strong>Id Prodotto</strong></th>
                            <th><strong>Pagina Prodotto</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->foods as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->pivot->food_units }}</td>
                                <td>{{ $item->id }}</td>
                                <td><a href="{{ route('admin.foods.show', $item->id) }}">Visualizza</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- <div class="row">    
            <div class="col">
                <h2>Dettagli dei prodotti ordinati</h2>        
            </div>
        </div>
        <div class="row bg-secondary p-1"> 
            <div class="col-2 "><strong>Nome prodotto</strong></div>
            <div class="col-2 "><strong>Unità</strong></div>
            <div class="col-2 "><strong>Id Prodotto</strong></div>
            <div class="col-2 "><strong>Pagina Prodotto</strong></div>
            <div class="col-4"></div>
        </div>
        <div class="row  border-bottom ">
            @foreach ($order->foods as $item)
                <div class="col-2 ">{{ $item->name }}</div>
                <div class="col-2 ">{{ $item->pivot->food_units }}</div>
                <div class="col-2 ">{{ $item->id }}</div>
                <div class="col-6 "><a href="{{ route('admin.foods.show', $item->id) }}">Visualizza</a></div>                            
            @endforeach          
        </div> --}}       

        <div class="row py-5">
            <div class="col">
                <h2>Tutti i dettagli</h2>
                <table class="table table-light table-striped">
                    <tr>
                        <th>Id Ordine
                        <th>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <th>Id Ristorante
                        <th>
                        <td>{{ $order->user_id }}</td>
                    </tr>
                    <tr>
                        <th>Importo totale
                        <th>
                        <td>{{ $order->amount }} &euro;</td>
                    </tr>
                    <tr>
                        <th>Cliente
                        <th>
                        <td>{{ $order->customer_name }} {{ $order->customer_surname }}</td>
                    </tr>
                    <tr>
                        <th>Indirizzo cliente
                        <th>
                        <td>{{ $order->customer_address }}</td>
                    </tr>
                    <tr>
                        <th>Email cliente
                        <th>
                        <td>{{ $order->customer_email }}</td>
                    </tr>
                    <tr>
                        <th>Cliente telefono
                        <th>
                        <td>{{ $order->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Id Transazione
                        <th>
                        <td>{{ $order->transaction_id }}</td>
                    </tr>
                    <tr>
                        <th>Stato transazione
                        <th>
                        <td>{{ $order->transaction_status }}</td>
                    </tr>
                    <tr>
                        <th>Data creazione ordine
                        <th>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                </table>
            </div>  

           

        </div>

        <a href="{{ Route('admin.orders.index') }}" class="btn btn-secondary text-white">
            <span>Torna indietro</span>
        </a>


        
    </div>
@endsection
