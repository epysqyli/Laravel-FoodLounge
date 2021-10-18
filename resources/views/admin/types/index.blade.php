@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Riepilogo tipologie</h1>

        {{-- bottone aggiungi tipologia --}}
        <div class="row">
            @if (count(Auth::user()->types) < 3)            
                <div class="col-12 text-center">
                    <a class="btn btn-outline-dark link-dark mt-2 mb-4 w-25" href="{{ route('admin.types.create') }}"
                        >Aggiungi tipologia</a>
                </div>            
            @endif
        </div>
        

        <div id="accordion">
            @foreach ($types as $type)
                <div class="card my-3">
                    {{-- layout contenitore --}}
                    <div class="card-header" id="{{ $type->name . 'heading' }}">
                        <div class="row">
                            <div class="col-6 py-2" data-target="#{{ $type->name . 'collapse' }}" aria-expanded="true"
                                aria-controls="{{ $type->name . 'collapse' }}">
                                {{ $type->name }}
                            </div>
                            <div class="col-6  d-flex justify-content-end">
                                <a class="btn btn-outline-dark mx-2"
                                    href="{{ route('admin.types.edit', $type->id) }}" class="link-dark">Modifica</a>
                                <form method="post" class="post-delete" action={{ route('admin.types.destroy', $type->id) }}>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- "tabella" interna --}}
                    <div id="{{ $type->name . 'collapse' }}" class="collapse show"
                        aria-labelledby="{{ $type->name . 'heading' }}" data-parent="#accordion">
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($type->foods as $food)
                                    <li class="list-group-item"><a
                                            href={{ route('admin.foods.show', $food->id) }}>{{ $food->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- bottone torna indietro --}}
        <div class="row">
            <div class="col-12 col-md-4 offset-md-8">
                <a href="{{ url()->previous() }}" class="d-block btn btn-secondary text-white">
                    <span>Torna indietro</span>
                </a>
            </div>
        </div>
    </div>
@endsection
