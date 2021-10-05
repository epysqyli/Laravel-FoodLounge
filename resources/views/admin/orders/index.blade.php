@extends('layouts.app')

{{-- @dd($orders); --}}

@section('content')
    <div class="container-md">
        <h1>Orders</h1>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">Order Value</th>
                    <th scope="col">Order Time</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->amount }} &euro;</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->customer_address }}</td>
                        <td><a href="{{ route('admin.orders.show', $order->id) }}">Check Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
