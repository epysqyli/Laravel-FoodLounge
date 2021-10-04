@extends('layouts.app')

@section('content')
<div class="containerhome">
    <h1 class="text-uppercase text-success pl-5">Your restaurants</h1>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">{{$user->name}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Manage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Statistics</a>
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
