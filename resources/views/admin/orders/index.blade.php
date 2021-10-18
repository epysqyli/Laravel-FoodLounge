@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h1>Riepilogo ordini</h1>
        <table class="table table-light table-striped">
            <thead class="">
                <tr>
                    <th scope="col my-2">Importo</th>
                    <th scope="col">Data & Ora</th>
                    <th scope="col my-2">Indirizzo</th>
                    <th scope="col my-2">Dettagli</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->amount }} &euro;</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->customer_address }}</td>
                        <td><a href="{{ route('admin.orders.show', $order->id) }}">Visualizza</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="col-12 col-md-4 offset-md-8">
                <a href="{{ Route('admin.home') }}" class="d-block btn btn-secondary text-white">
                    <span>Torna indietro</span>
                </a>
            </div>
        </div>
        {{ $orders->links() }}
    </div>
@endsection
