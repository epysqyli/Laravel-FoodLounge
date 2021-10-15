@extends('layouts.app')

@section('content')

    <div class="container">

        @if (count(Auth::user()->types) < 3)            
            <div class="row">
                <div class="col-12 text-center">
                    <a class="btn btn-outline-dark mt-2 mb-4" href="{{ route('admin.types.create') }}"
                        class="link-dark">Aggiungi tipologia</a>
                </div>
            </div>            
        @endif  

        <div  id="accordion">
            @foreach ($types as $type)
                <div class="row card" id="{{ $type->name . 'heading' }}">
                    <div class="col card-header d-flex" >                        
                        <div class="col-4" data-target="#{{ $type->name . 'collapse' }}" aria-expanded="true"
                            aria-controls="{{ $type->name . 'collapse' }}">
                            {{ $type->name }}
                        </div>
                        <div class="col-8 d-flex justify-content-end">
                            <div class="row">
                                <div class="col-6">
                                    <a class="btn btn-outline-dark"
                                    href="{{ route('admin.types.edit', $type->id) }}" class="link-dark">Modifica</a>
                                </div>

                                <div class="col-6">
                                    <form method="post" class="post-delete" action={{ route('admin.types.destroy', $type->id) }}>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class=" btn btn-danger">Elimina</button>
                                    </form>
                                </div>                                   
                            </div>                                
                        </div>                        
                    </div>

                    <div id="{{ $type->name . 'collapse' }}" class="col collapse show"
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

        <a href="{{ Route('admin.home') }}" class="btn btn-secondary text-white mt-2">
            <span>Torna indietro</span>
        </a>
    </div>
@endsection
