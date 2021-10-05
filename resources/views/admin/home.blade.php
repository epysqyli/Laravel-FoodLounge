@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-1 pt-4 rounded shadow">
            <div class="col-4">
                <div class="row">
                    <div class="col-8 offset-2">
                        <img class="img-fluid w-100 mt-1 mb-2 rounded shadow-sm" src={{ asset('storage/' . Auth::user()->profile_image) }} alt="">
                    </div>
                </div>
                <div class="row">
                    <a class="col-8 mx-auto my-2 pt-2 pb-1 border shadow" href="{{ route('admin.foods.index') }}">
                        <h4 class="text-center">Manage Foods</h4>
                    </a>
                </div>
                <div class="row">
                    <a class="col-8 mx-auto mt-3 pt-2 pb-1 border shadow" href="{{ route('admin.orders.index') }}">
                        <h4 class="text-center">Check Orders</h4>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <img src={{ asset('storage/' . Auth::user()->cover_image) }} alt="John" style="width:100%">
                <h1 class="title my-3">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
@endsection
