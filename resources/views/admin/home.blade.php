@extends('layouts.app')

@section('content')
<div class="containerhome">
    <h1 class="text-uppercase text-success pl-5">{{Auth::user()->name}}</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active text-uppercase" aria-current="true" href="#">{{Auth::user()->name}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase" href="{{route('admin.foods.index', Auth::user()->id)}}">Foods</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase" href="{{route('admin.orders.index', Auth::user()->id)}}">Orders</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{Auth::user()->vat}}</h5>
    <p class="card-text">{{Auth::user()->description}}</p>
    <img src="{{Auth::user()->cover_image}}" alt="">
  </div>
</div>
</div>
@endsection
