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
        <a class="nav-link text-uppercase" href="#">Foods</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled text-uppercase">Orders</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
@endsection
