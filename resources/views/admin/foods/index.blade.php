@extends('layouts.app')

{{-- @dd($foods); --}}

@section('content')
    <div class="container w-100">
        <h1>All foods</h1>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Food ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Visible</th>
                    <th scope="col">Details</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($foods as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td><img class="w-50" src="{{ $food->image }}" alt="food-image"></td>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }} &euro;</td>
                        <td>{{ $food->visible ? 'Visible' : 'Not Visible' }}</td>
                        <td>Show</td>
                        <td>Edit</td>
                        <td>Delete</td>
                        <td><a href="{{ route('admin.foods.show', $food->id) }}">Check Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
