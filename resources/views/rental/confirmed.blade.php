@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="title">Your booking was successfully !</h1><br>
<table class="table table-bordered ">
  <thead>
    <tr>
      <th colspan="2" class="bg-info">Driver Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th width="15%" scope="row">Firstname</th>
      <td>{{$firstName}}</td>
    </tr>
    <tr>
      <th scope="row">Lastname</th>
      <td>{{$lastName}}</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td>{{$email}}</td>
    </tr>
    <tr>
      <th scope="row">Phone Number</th>
      <td>{{$phoneNum}}</td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <thead>
    <tr>
      <th colspan="2" class="bg-info">Car Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th width="15%" scope="row">Register</th>
      <td>{{$car->register}}</td>
    </tr>
    <tr>
      <th scope="row">Type</th>
      <td>{{$car->type}}</td>
    </tr>
    <tr>
      <th scope="row">Brand</th>
      <td>{{$car->brand}}</td>
    </tr>
    <tr>
      <th scope="row">Seat</th>
      <td>{{$car->seat}}</td>
    </tr>
    <tr>
      <th scope="row">Pick up date</th>
      <td>{{$pickDate}}</td>
    </tr>
    <tr>
      <th scope="row">Drop off date</th>
      <td>{{$dropDate}}</td>
    </tr>
    <tr>
      <th scope="row">Total Price</th>
      <td>{{$dateDiff*$car->pricePerDay}} Baht</td>
    </tr>
    <th scope="row">Discount</th>
    <td><?php  $inf = DB::table('promotions')->get(); ?>
    @foreach ($inf as $inn)
    {{$inn->dcType}}
     {{$inn->dc}}
     @endforeach</td>
  </tr>
  </tbody>
</table>
<button class="btn btn-primary center-block" type="button" name="button" onclick="window.print()">PRINT</button>
</div>
<tr>


@endsection
