@extends('layouts.app')

@section('content')
    <div class="containerindex">
       <h1 class="text-uppercase pl-5">Orders</h1>
       <table class="table table-success table-striped">
   
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Orders</th>
      <th scope="col">Foods</th>
      <th scope="col">Units</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

</table>
       

    </div>    
@endsection