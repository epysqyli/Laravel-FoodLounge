@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h1>Orders</h1>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Order Value</th>
                    <th scope="col">Order Time</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->amount }} &euro;</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->customer_address }}</td>
                        <td><a href="{{ route('admin.orders.show', $order->id) }}">Check Details</a></td>
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
