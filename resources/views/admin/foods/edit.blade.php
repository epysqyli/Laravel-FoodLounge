@extends('layouts.app')

@section('content')
    <div class="container newplate">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-uppercase alert-dark text-center"> Change Plate <div class="img">
                            <img src="{{ url('image/food.png') }}" alt="">
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.foods.update', $food->id ) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name', $food->name) }}" autocomplete="name" autofocus required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 offset-md-1 text-md-right pt-md-1" for="visible">Availability</label>
                                <div class="col-md-4 col-form-label">
                                    <div>
                                        <input type="radio" id="visible" name="visible" value="1"  {{ ($food->visible =="1")? "checked" : "" }} >
                                        <label for="visible">Accessible</label><br>
                                    </div>
                                    <div>
                                        <input type="radio" id="nonvisible" name="visible" value="0" {{ ($food->visible =="0")? "checked" : "" }}>
                                        <label for="nonvisible">Inaccessible</label><br>
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" step="0.01"
                                        class="form-control @error('price') is-invalid @enderror" name="price"
                                        autocomplete="price" value="{{ old('price', $food->price) }}" required>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="ingredients" class="col-md-4 col-form-label text-md-right">Ingredients</label>

                                <div class="col-md-6">
                                    <input id="ingredients" type="text"
                                        class="form-control @error('ingredients') is-invalid @enderror" name="ingredients"
                                        value="{{ old('ingredients', $food->ingredients) }}" autocomplete="ingredients" required>

                                    @error('ingredients')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="type_id" class="col-md-4 col-form-label text-md-right">Type</label>

                                <div class="col-md-6">
                                    <select id="type"
                                        class="form-control @error('type') is-invalid
                                    @enderror"
                                        name="type_id" autocomplete="type_id" required>
                                        <option value="">Choose your types</option>
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
                                    <textarea id="description" type="text"
                                        class="form-control text-left @error('description') is-invalid
                                    @enderror"
                                        name="description" autocomplete="description" required
                                        rows="6">{{old('description', $food->description)}}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Image Food</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" 
                                        class="d-block form-control-file @error('image') is-invalid
                                    @enderror"
                                        name="image" autocomplete="image" value="{{ old('image', $food->image) }}">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="additional_details" class="col-md-4 col-form-label text-md-right">Additional
                                    Details</label>

                                <div class="col-md-6">
                                    <textarea id="additional_details" type="text"
                                        class="form-control" name="additional_details" autocomplete="additional_details"
                                        rows="3">{{ old('additional_details', $food->additional_details) }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add plates
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
