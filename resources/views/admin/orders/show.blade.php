@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h1 class="text-uppercase pl-5">Details of order</h1>
        <table class="table table-light table-striped">
            @foreach ($order->toArray() as $key => $value)
                <tr>
                    <th>{{ $key }}
                    <th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
