{{-- @extends('layouts.app')

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
                <h1>All foods</h1>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-outline-dark mt-2 mb-5 d-block mx-auto w-75"
                            href="{{ route('admin.foods.create', Auth::user()->id) }}" class="link-dark text-uppercase">aggiungi prodotto</a>
                    </div>
                </div>
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th>Food ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Visible</th>
                            <th>Details</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->id }}</td>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->price }} &euro;</td>
                                <td>{{ $food->visible ? 'Visible' : 'Not Visible' }}</td>
                                <td><a href="{{ route('admin.foods.show', $food->id) }}">Dettagli</a></td>
                                <td><a href="{{ route('admin.foods.edit', $food->id) }}">Modifica</a></td>
                                <td>
                                    <form class="post-delete" action="{{ route('admin.foods.destroy', $food->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
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
                                    <td><a href="{{ route('admin.foods.show', $food->id) }}">Visiona</a></td>
                                    <td><a href="{{ route('admin.foods.edit', $food->id) }}">Esegui</a></td>
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
    </div>
@endsection --}}

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
        <div class="row mb-2">
            <div class="col-12 col-md-6">
                <h1>Tutti i prodotti</h1>
            </div>
            <div class="col-12 col-md-4 offset-md-2">
                <a class="d-block w-100 btn btn-outline-dark my-2"
                    href="{{ route('admin.foods.create', Auth::user()->id) }}" class=" link-dark">Aggiungi
                    prodotto</a>
            </div>
        </div>

        {{-- table --}}
        <div class="row">
            <div class="col-12">
                <table class="table table-light table-striped ">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Prezzo</th>
                            <th>Visibile</th>
                            <th>Opzioni</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->price }} &euro;</td>
                                <td>{{ $food->visible ? 'Sì' : 'No' }}</td>
                                <td class="d-md-flex justify-content-around">
                                    <a class="d-block btn btn-primary w-100 mb-1 mb-md-0 ml-md-1"
                                        href="{{ route('admin.foods.show', $food->id) }}">Visualizza</a>
                                    <a class="d-block btn btn-info w-100 mb-1 mb-md-0 ml-md-1"
                                        href="{{ route('admin.foods.edit', $food->id) }}">Modifica</a>
                                    <form class="d-block post-delete w-100 mb-1 mb-md-0 ml-md-1"
                                        action="{{ route('admin.foods.destroy', $food->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="d-block btn btn-danger w-100">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 offset-md-8">
                <a href="{{ url()->previous() }}" class="d-block btn btn-secondary text-white">
                    <span>Torna indietro</span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                {{ $foods->links() }}
            </div>
        </div>
    </div>
@endsection
