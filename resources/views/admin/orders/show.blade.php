@extends('layouts.app')

{{-- @dd($order->foods->first()->pivot->food_units); --}}

@section('content')
    <div class="container-md">
        <h2>Dettagli del contenuto</h2>
        <table class="table table-light table-striped">
            <thead>
                <tr >
                    <th><strong>Nome</strong></th>
                    <th><strong>Quantità</strong></th>
                    <th><strong>Id prodotto</strong></th>
                    <th><strong></strong></th>
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

        <h2>Tutti i dettagli</h2>
        <table class="table table-light table-striped">
            <tr>
                <th>Id ordine
                <th>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <th>Id utente
                <th>
                <td>{{ $order->user_id }}</td>
            </tr>
            <tr>
                <th>Importo
                <th>
                <td>{{ $order->amount }} &euro;</td>
            </tr>
            <tr>
                <th>Cliente
                <th>
                <td>{{ $order->customer_name }} {{ $order->customer_surname }}</td>
            </tr>
            <tr>
                <th>Indirizzo consegna
                <th>
                <td>{{ $order->customer_address }}</td>
            </tr>
            <tr>
                <th>Email cliente
                <th>
                <td>{{ $order->customer_email }}</td>
            </tr>
            <tr>
                <th>Telefono cliente
                <th>
                <td>{{ $order->phone_number }}</td>
            </tr>
            <tr>
                <th>Id transazione
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

        <div class="row">
            <div class="col-12 col-md-4 offset-md-8">
                <a href="{{ Route('admin.orders.index') }}" class="d-block btn btn-secondary text-white">
                    <span>Torna indietro</span>
                </a>
            </div>
        </div>
    </div>
@endsection
