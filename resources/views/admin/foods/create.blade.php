@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-uppercase ">Add New Plate</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.foods.store',Auth::user()->id) }}" enctype="multipart/form-data">
                            @csrf   

                            <input type="hidden" id='user_id' name='user_id' value={{ Auth::user()->id }}>
                            <input type="hidden" id='type_id' name='type_id' value={{ Auth::user()->id }}>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="visible" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="visible" type="checkbox" class="form-control @error('name') is-invalid @enderror"
                                        name="visible" value="{{ old('name') }}" autocomplete="name" autofocus>
                                        <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="visible" value="1" name="visible" checked>
                                                <label class="form-check-label" for="visible">Visibile</label>
                                        </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ingredients" class="col-md-4 col-form-label text-md-right">Ingredients</label>

                                <div class="col-md-6">
                                    <input id="ingredients" type="ingredients" class="form-control @error('ingredients') is-invalid @enderror"
                                        name="ingredients" value="{{ old('ingredients') }}" autocomplete="ingredients">

                                    @error('ingredients')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="price"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        autocomplete="new-price">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="type" class="col-md-4 col-form-label text-md-right">Categoria Piatto</label>

                                <div class="col-md-6">
                                    <select id="type"
                                        class="form-control @error('type') is-invalid
                                    @enderror"
                                        name="type" autocomplete="type">
                                        <option value="">Scegli la tua categoria</option>
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
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" value="{{ old('description') }}"
                                        class="form-control @error('description') is-invalid
                                    @enderror"
                                        name="description" autocomplete="description" rows="6">{{ old('description') }}
                                    </textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image
                                    Food</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid
                                    @enderror"
                                        name="image" autocomplete="image">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="additional_details" class="col-md-4 col-form-label text-md-right">Additional Details</label>

                                <div class="col-md-6">
                                    <textarea id="additional_details" type="text" value="{{ old('additional_details') }}"
                                        class="form-control @error('additional_details') is-invalid
                                    @enderror"
                                        name="additional_details" autocomplete="additional_details" rows="3">{{ old('additional_details') }}
                                    </textarea>

                                    @error('additional_details')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Aggiungi piatto
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection 