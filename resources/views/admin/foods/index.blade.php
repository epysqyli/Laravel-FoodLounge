@extends('layouts.app')

@section('content')
    <div class="containerindex">
        <div class="text-center">
            <h1 class="text-uppercase ">Foods</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="d-grid ">
                <a href="{{ route('admin.foods.create')}}" > <button class="btn btn-primary block box-shadow" style="width:80%" type="button">Add Food</button></a>
                   
                   
                </div>
            </div>
        </div>
      
      
       

    </div>    
@endsection