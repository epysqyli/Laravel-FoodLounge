@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center alert-dark text-uppercase">Aggiorna il tuo profilo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data" id="edit-user-form">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome attivit&agrave;</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus
                                        required>

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
                                        name="email" value="{{ old('email', $user->email) }}" autocomplete="email"
                                        required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Indirizzo</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" value="{{ old('address', $user->address) }}"
                                        class="form-control @error('address') is-invalid
                                    @enderror"
                                        name="address" autocomplete="address" required>
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
                                        class="form-control  @error('description') is-invalid
                                    @enderror"
                                        name="description" autocomplete="description" rows="6"
                                        required>{{ old('description', $user->description) }}</textarea>

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
                                        <label for={{ $category->name }}>{{ $category->name }}</label>
                                        <input class="mr-3" type="checkbox" id={{ $category->name }}
                                            name="categories[]" value={{ $category->id }} @if (old('categories', $user->categories))
                                        {{ in_array($category->id, getCategoriesIds($user->categories)) ? 'checked' : '' }}
                                    @endif>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vat" class="col-md-4 col-form-label text-md-right">Partita IVA</label>

                                <div class="col-md-6">
                                    <input id="vat" type="text" value="{{ old('vat', $user->vat) }}"
                                        class="form-control @error('vat') is-invalid
                                    @enderror"
                                        name="vat" autocomplete="vat" required>
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
                                        class="form-control-file @error('profile_image') is-invalid
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
                                        class="form-control-file @error('cover_image') is-invalid
                                    @enderror"
                                        name="cover_image" autocomplete="cover_image">
                                    @error('cover_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-6 offset-md-4 d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">
                                        Salva
                                    </button>
                                    <a class="d-block btn btn-danger " href={{ route('password.request') }}>Cambia password</a>
                                </div>
                            </div>
                        </form>

                        <a href="{{ Route('admin.home') }}" class="btn btn-secondary text-white">
                            <span>Torna indietro</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
