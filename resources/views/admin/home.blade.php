@extends('layouts.app')

@section('content')
    <div class="container backend">
        <div class="row mx-1 pt-4 rounded border bg-light">
            <div class="col-4">
                <div class="row">
                    <div class="col-8 offset-2">
                        <img class="img-fluid w-100 mt-1 mb-2 rounded shadow-sm" src={{ asset('storage/' . Auth::user()->profile_image) }} alt="">
                    </div>
                </div>
                <div class="row">
                    <a class="col-7 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white" href="{{ route('admin.foods.index', Auth::user()->id) }}">
                        <h4 class="text-center">Manage Foods</h4>
                    </a>
                </div>
                <div class="row">
                    <a class="col-7 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white" href="{{ route('admin.types.index', Auth::user()->id) }}">
                        <h4 class="text-center">Manage Types</h4>
                    </a>
                </div>
                <div class="row">
                    <a class="col-7 mx-auto my-2 pt-2 pb-1 border rounded shadow bg-info text-white" href="{{ route('admin.orders.index', Auth::user()->id) }}">
                        <h4 class="text-center">Check Orders</h4>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <img class="rounded shadow" src={{ asset('storage/' . Auth::user()->cover_image) }} alt="John" style="width:100%">
                <h1 class="title my-3">{{ Auth::user()->name }}</h1>
                <p class="lead">
                    {{ Auth::user()->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
