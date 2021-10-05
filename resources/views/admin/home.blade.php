@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-1 rounded shadow">
            <div class="col-4">
                <div class="row">
                    <a class="col my-2 mx-3 pt-2 pb-1 shadow"
                        href="{{ route('admin.foods.index') }}">
                        <h3 class="text-center">Manage Foods</h3>
                    </a>
                </div>
                <div class="row">
                    <a class="col mt-3 mx-3 pt-2 pb-1 shadow"
                        href="{{ route('admin.orders.index') }}">
                        <h3 class="text-center">Check Orders</h3>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <img src={{ asset('storage/' . Auth::user()->cover_image) }} alt="John" style="width:100%">
                <h1 class="title">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
@endsection
