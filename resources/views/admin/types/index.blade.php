@extends('layouts.app')

@section('content')

    @if (count(Auth::user()->types) < 3)
        <div class="row">
            <div class="col-12">
                <a class="btn btn-outline-dark mt-2 mb-4 d-block mx-auto w-25" href="{{ route('admin.types.create') }}"
                    class="link-dark">Add Types</a>
            </div>
        </div>
    @endif

    <div class="container">
        <div id="accordion">
            @foreach ($types as $type)

                <div class="card my-3">
                    <div class="card-header" id="{{ $type->name . 'heading' }}">
                        <div class="mb-0 d-flex justify-content-between">
                            <div class="py-2" data-target="#{{ $type->name . 'collapse' }}" aria-expanded="true"
                                aria-controls="{{ $type->name . 'collapse' }}">
                                {{ $type->name }}
                            </div>
                            <div class="col-4 d-flex justify-content-around">
                                <a class="btn btn-outline-dark d-block w-50"
                                    href="{{ route('admin.types.edit', $type->id) }}" class="link-dark">Edit Type</a>
                                <form method="post" action={{ route('admin.types.destroy', $type->id) }}>
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
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
