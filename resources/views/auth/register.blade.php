@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrati come ristoratore</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome attivit&agrave;</label>

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
                                <label for="email" class="col-md-4 col-form-label text-md-right">Indirizzo Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma
                                    Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Indirizzo</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" value="{{ old('address') }}"
                                        class="form-control @error('address') is-invalid
                                    @enderror"
                                        name="address" autocomplete="address">
                                    @error('address')
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
                                <label for="categories" class="col-md-4 col-form-label text-md-right">Categorie
                                    Ristorante</label>

                                <div class="col-md-6" id="categories">
                                    @foreach ($categories as $category)
                                        <input type="checkbox" id={{ $category->name }} name="categories[]"
                                            value={{ $category->id }} @if (old('categories'))
                                        {{ in_array($category->id, old('categories')) ? 'checked' : '' }}
                                    @endif >
                                    <label for="">{{ $category->name }}</label>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vat" class="col-md-4 col-form-label text-md-right">Partita IVA</label>

                                <div class="col-md-6">
                                    <input id="vat" type="text" value="{{ old('vat') }}"
                                        class="form-control @error('vat') is-invalid
                                    @enderror"
                                        name="vat" autocomplete="vat">
                                    @error('vat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="profile_image" class="col-md-4 col-form-label text-md-right">Immagine
                                    Profilo</label>

                                <div class="col-md-6">
                                    <input id="profile_image" type="file"
                                        class="form-control @error('profile_image') is-invalid
                                    @enderror"
                                        name="profile_image" autocomplete="profile_image">
                                    @error('profile_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cover_image" class="col-md-4 col-form-label text-md-right">Immagine di
                                    Copertina</label>

                                <div class="col-md-6">
                                    <input id="cover_image" type="file"
                                        class="form-control @error('cover_image') is-invalid
                                    @enderror"
                                        name="cover_image" autocomplete="cover_image">
                                    @error('cover_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrati!
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
