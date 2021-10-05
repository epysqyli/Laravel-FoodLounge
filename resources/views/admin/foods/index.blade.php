@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All foods</h1>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th>Food ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Visible</th>
                    <th>Details</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($foods as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }} &euro;</td>
                        <td>{{ $food->visible ? 'Visible' : 'Not Visible' }}</td>
                        <td><a href="{{ route('admin.foods.show', $food->id) }}">Check Details</a></td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
