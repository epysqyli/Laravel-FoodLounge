@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>All foods</h1>
                <button type="button" class="btn btn-outline-dark"> <a  href="{{route('admin.foods.create', Auth::user()->id)}}" class="link-dark">ADD FOOD</a></button>
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Visible</th>
                            <th>Action</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

