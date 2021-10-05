@extends('layouts.app')

@section('content')
    <div class="cardrestaurant container">
        <div class="row">
            <div class="col-3 align-item-end">
                menu
            </div>
            <div class="col-6">
                <div class="card">
                    <img src="{{ URL::asset('/image/backend.jpg') }}" alt="John" style="width:100%">
                    <h1>Nome Ristorante</h1>
                    <p class="title">{{ Auth::user()->name }}</p>

                    <div style="margin: 24px 0;">
                        <a class="nav-link text-uppercase" href="{{ route('admin.foods.index', Auth::user()->id) }}">Foods</a>
                        <p class="card-text"><a class="nav-link text-uppercase"
                                href="{{ route('admin.orders.index', Auth::user()->id) }}">Orders</a></p>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <p><button>Contact</button></p>
                </div>
             </div>
             <div class="col-3">
                 menu
             </div>
        </div>
    </div>

   

@endsection
