@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2 mb-5">{{ $food->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img class="rounded" src={{ $food->image }} alt="">
            </div>
            <div class="col-8">
                <table class="table table-light table-striped">
                    <tr>
                        <th>Price
                        <th>
                        <td>{{ $food->id }}</td>
                    </tr>
                    <tr>
                        <th>Food type
                        <th>
                        <td>{{ $food->type->name }}</td>
                    </tr>
                    <tr>
                        <th>Price
                        <th>
                        <td>{{ $food->price }} &euro;</td>
                    </tr>
                    <tr>
                        <th>Description
                        <th>
                        <td>{{ $food->description }}</td>
                    </tr>
                    <tr>
                        <th>Visible
                        <th>
                        <td>{{ $food->visible ? 'Yes' : 'No' }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
