@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert-dark text-center">Add food categories<div class="img">
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('admin.types.store', Auth::user()->id) }}"
                            enctype="multipart/form-data">
                            @csrf

                            @for ($i = 0; $i < $available_categories; $i++)

                                <div class="form-group row">
                                    <label for={{ 'type' . $i }} class="col-md-4 col-form-label text-md-right">Food Type Name</label>
                                    <div class="col-md-6">
                                        <input id={{ 'type' . $i }} type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="types[]"
                                            value="{{ old('name') }}" autocomplete="name" required autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            @endfor

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
