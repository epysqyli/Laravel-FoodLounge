@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-2 mb-5">{{ $food->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <img class="rounded w-100"
                    src={{ $food->image[0] == 'h' ? $food->image : asset('storage/' . $food->image) }} alt="">
            </div>
            <div class="col-12 col-md-8 mt-3 mt-md-0">
                <table class="table table-light table-striped">
                    <tr>
                        <th>Food Id
                        <th>
                        <td>{{ $food->id }}</td>
                    </tr>
                    <tr>
                        <th>Food type
                        <th>
                        <td>{{ $food->type ? $food->type->name : 'not assigned to any category' }}</td>
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
                    @if ($food->additional_details)
                        <tr>
                            <th>Additional Details
                            <th>
                            <td>{{ $food->additional_details }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection
