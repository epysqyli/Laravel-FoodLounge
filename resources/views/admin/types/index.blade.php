@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <a class="btn btn-outline-dark mt-2 mb-4 d-block mx-auto w-25"
                href="{{ route('admin.types.create') }}" class="link-dark">Add Types</a>
        </div>
    </div>
    <div class="container">
        <div id="accordion">
            @foreach ($types as $type)

                <div class="card">
                    <div class="card-header" id="{{ $type->name . 'heading' }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse"
                                data-target="#{{ $type->name . 'collapse' }}" aria-expanded="true"
                                aria-controls="{{ $type->name . 'collapse' }}">
                                {{ $type->name }}
                            </button>
                        </h5>
                    </div>

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
    </div>
@endsection
