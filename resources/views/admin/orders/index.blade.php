@extends('layouts.app')

{{-- @dd($orders); --}}

@section('content')
    <div class="container-md">
        <h1>Orders</h1>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Id Ordine</th>
                    <th scope="col">Importo</th>
                    <th scope="col">Data / Orario</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Dettagli</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->amount }} &euro;</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->customer_address }}</td>
                        <td><a href="{{ route('admin.orders.show', $order->id) }}">Visualizza</a></td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <a href="{{ Route('admin.home') }}" class="btn btn-secondary text-white">
            <span>Torna indietro</span>
        </a>
    </div>
@endsection
