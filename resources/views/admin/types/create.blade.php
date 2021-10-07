@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert-dark text-center">Add up to three categories<div class="img">
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.types.store', Auth::user()->id) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" id='user_id' name='user_id' value={{ Auth::user()->id }}>

                            <div class="form-group row">
                                <label for="name-1" class="col-md-4 col-form-label text-md-right">Type 1</label>
                                <div class="col-md-6">
                                    <input id="name-1" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="types[]" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name-2" class="col-md-4 col-form-label text-md-right">Type 2</label>
                                <div class="col-md-6">
                                    <input id="name-2" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="types[]" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name-3" class="col-md-4 col-form-label text-md-right">Type 3</label>
                                <div class="col-md-6">
                                    <input id="name-3" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="types[]" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save categories
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
