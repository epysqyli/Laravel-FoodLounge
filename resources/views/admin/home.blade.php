@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-1 border border-dark rounded shadow">
            <div class="col py-5">
                <h2 class="text-center">Logged restaurant details</h2>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
            <a class="col my-2 my-sm-0 mx-3 border border-dark rounded py-5 shadow" href="{{ route('admin.foods.index') }}">
                <h2 class="text-center text-uppercase">Manage Foods</h2>
            </a>
            <a class="col my-2 my-sm-0 mx-3 border border-dark rounded py-5 shadow" href="{{ route('admin.orders.index') }}">
                <h2 class="text-center text-uppercase">Check Orders</h2>
            </a>
        </div>
    </div>
@endsection
