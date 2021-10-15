@extends('layouts.app')

@section('content')
    <div class="container">
        <p>
            @if (session('updated'))
                <div class="alert alert-success">
                    {{ session('updated') }}
                </div>

            @endif
            @if (session('delete'))
                <div class="alert alert-success">
                    {{ session('delete') }}
                </div>
            @endif
        </p>
        <div class="row">
            <div class="col">
                <h1>I tuoi prodotti</h1>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-dark mt-2 mb-5 d-block mx-auto w-75"
                            href="{{ route('admin.foods.create', Auth::user()->id) }}" class="link-dark">ADD FOOD</a>
                    </div>
                </div>
                <div class="row ">
                    <table class="col table table-light table-striped">
                        <thead>
                            <tr>
                                <td>{{ $food->id }}</td>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->price }} &euro;</td>
                                <td>{{ $food->visible ? 'Visible' : 'Not Visible' }}</td>
                                <td><a href="{{ route('admin.foods.show', $food->id) }}">Check Details</a></td>
                                <td><a href="{{ route('admin.foods.edit', $food->id) }}">Change</a></td>
                                <td>
                                    <form class="post-delete" action="{{ route('admin.foods.destroy', $food->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </thead>
    
                        <tbody>
                            @foreach ($foods as $food)
                                <tr>
                                    <td>{{ $food->id }}</td>
                                    <td>{{ $food->name }}</td>
                                    <td>{{ $food->price }} &euro;</td>
                                    <td>{{ $food->visible ? 'Sì' : 'No' }}</td>
                                    <td><a href="{{ route('admin.foods.show', $food->id) }}">Visiona Dettagli</a></td>
                                    <td><a href="{{ route('admin.foods.edit', $food->id) }}">Modifica</a></td>
                                    <td>
                                        <form class="post-delete" action="{{ route('admin.foods.destroy', $food->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>

        <a href="{{ Route('admin.home') }}" class="btn btn-secondary text-white">
            <span>Torna indietro</span>
        </a>
    </div>
@endsection
