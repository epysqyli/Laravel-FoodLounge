@extends('layouts.app')

{{-- @dd($order->foods->first()->pivot->food_units); --}}

@section('content')
    <div class="container-md">
        <h2>Food items details</h2>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th><strong>Food Name</strong></th>
                    <th><strong>Food Units</strong></th>
                    <th><strong>Food Id</strong></th>
                    <th><strong></strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->foods as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->pivot->food_units }}</td>
                        <td>{{ $item->id }}</td>
                        <td><a href="{{ route('admin.foods.show', $item->id) }}">Go to food page</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>All details</h2>
        <table class="table table-light table-striped">
            <tr>
                <th>Order ID
                <th>
                <td>{{ $order->id }}</td>
            </tr>
            <tr>
                <th>User ID
                <th>
                <td>{{ $order->user_id }}</td>
            </tr>
            <tr>
                <th>Amount
                <th>
                <td>{{ $order->amount }} &euro;</td>
            </tr>
            <tr>
                <th>Customer
                <th>
                <td>{{ $order->customer_name }} {{ $order->customer_surname }}</td>
            </tr>
            <tr>
                <th>Customer Address
                <th>
                <td>{{ $order->customer_address }}</td>
            </tr>
            <tr>
                <th>Customer Email
                <th>
                <td>{{ $order->customer_email }}</td>
            </tr>
            <tr>
                <th>Customer Phone
                <th>
                <td>{{ $order->phone_number }}</td>
            </tr>
            <tr>
                <th>Transaction ID
                <th>
                <td>{{ $order->transaction_id }}</td>
            </tr>
            <tr>
                <th>Transaction Status
                <th>
                <td>{{ $order->transaction_status }}</td>
            </tr>
            <tr>
              <th>Order Creation Date
              <th>
              <td>{{ $order->created_at }}</td>
          </tr>
        </table>

        <div class="row">
            <div class="col-12 col-md-4 offset-md-8">
                <a href="{{ url()->previous() }}" class="d-block btn btn-secondary text-white">
                    <span>Torna indietro</span>
                </a>
            </div>
        </div>
    </div>
@endsection
