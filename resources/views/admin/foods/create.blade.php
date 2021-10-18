@extends('layouts.app')

@section('content')
    <div class="container newplate">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-uppercase alert-dark text-center text-uppercase"> aggiungi nuovo prodotto <div class="img">
                            <img src="{{ url('image/food.png') }}" alt="">
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.foods.store', Auth::user()->id) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" id='user_id' name='user_id' value={{ Auth::user()->id }}>

                            @if (count(Auth::user()->types) == 0)
                                <div class="form-group row">
                                    <a class="col-md-6 offset-md-4 d-block border border-danger btn btn-outline-danger "
                                        href={{ route('admin.types.create') }}>Aggiungi una tipologia di prodotto prima di continuare</a>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }} required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 offset-md-1 text-md-right pt-md-1" for="visible">Visibile</label>
                                <div class="col-md-4 col-form-label">
                                    <div>
                                        <input type="radio" id="visible" name="visible" value="1"
                                            {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }} required>
                                        <label for="visible">Sì</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" id="nonvisible" name="visible" value="0"
                                            {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }}>
                                        <label for="nonvisible">No</label><br>
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Prezzo') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" step="0.01"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        autocomplete="price" value="{{ old('price') }}"
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }} required>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ingredients" class="col-md-4 col-form-label text-md-right">Ingredienti</label>

                                <div class="col-md-6">
                                    <input id="ingredients" type="text"
                                        class="form-control @error('ingredients') is-invalid @enderror" name="ingredients"
                                        value="{{ old('ingredients') }}" autocomplete="ingredients"
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }} required>

                                    @error('ingredients')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type_id" class="col-md-4 col-form-label text-md-right">Tipologia</label>

                                <div class="col-md-6">
                                    <select id="type"
                                        class="form-control @error('type') is-invalid
                                    @enderror"
                                        name="type_id" autocomplete="type_id"
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }} required>
                                        <option value="">Scegli le tue tipologie</option>
                                        @foreach ($types as $type)
                                            <option value={{ $type->id }} @if ($type->id == old('type'))
                                                selected
                                        @endif>{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descrizione</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" value="{{ old('description') }}"
                                        class="form-control @error('description') is-invalid
                                    @enderror"
                                        name="description" autocomplete="description" rows="6"
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }}
                                        required>{{ old('description') }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Foto prodotto</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"
                                        class="d-block form-control-file @error('image') is-invalid
                                    @enderror"
                                        name="image" autocomplete="image"
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }} required>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="additional_details" class="col-md-4 col-form-label text-md-right">Dettagli opzionali</label>

                                <div class="col-md-6">
                                    <textarea id="additional_details" type="text" value="{{ old('additional_details') }}"
                                        class="form-control" name="additional_details" autocomplete="additional_details"
                                        rows="3" {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }}>{{ old('additional_details') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"
                                        {{ count(Auth::user()->types) == 0 ? 'disabled' : '' }}>
                                        Aggiungi
                                    </button>
                                </div>
                            </div>

                            
                        </form>
                        <a href="{{ Route('admin.foods.index') }}" class="btn btn-secondary text-white">
                            <span>Torna indietro</span>
                        </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
