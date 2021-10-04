@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('updated'))
            <div class="alert alert-success">
                {{ session('updated') }}
            </div>            
        @endif
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Azioni</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($foods as $food)
                    <tr>
                        <th scope="row">{{ $food->id}}</th>
                        <td>{{ $food->title }}</td>
                        <td>
                            @if ($food->category)
                                {{ $food->category->name }}                               
                            @endif
                        </td> 
                        <td>
                            <a href="{{ route('admin.foods.show', $food->slug) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('admin.foods.edit', $food->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('admin.foods.destroy', $food->id) }}" method="food" class="d-inline-block delete-food-form">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>                        
                    </tr>
                    
                @endforeach              
            </tbody>
        </table>

        <h2 class="mt-5">Post per categorie</h2>
        @foreach ($categories as $category)
            <h3>{{ $category->name }}</h3>
                @forelse ($category->foods as $food)
                    <h4><a href="{{ route('admin.foods.show', $food->slug) }}">{{ $food->title }}</a></h4>                
                @empty
                    <p>Non ci sono cibi per questa categoria.
                        <a href="{{ route('admin.foods.create') }}">Scrivine uno</a>
                    </p>                
            @endforelse
        @endforeach

    </div>    
@endsection