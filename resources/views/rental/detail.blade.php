@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="title">Choose car</h1><br>
<form class="form-inline">
  <label for="pick-date-input" class="col-2 col-form-label">Pick up Date</label>
  <input class="form-control" type="text" value="{{ $pickDate }}" placeholder="{{ $pickDate }}" readonly>
  <label for="drop-date-input" class="col-2 col-form-label">Drop off Date</label>
  <input class="form-control" type="text" value="{{ $dropDate }}" placeholder="{{ $dropDate }}" readonly>
</form>
<br>
<br>
<table class="table table-striped">
  <tr>
    <th>Register</th>
    <th>Type</th>
    <th>Brand</th>
    <th>Seat</th>
    <th>Price per day (Baht)</th>
    <th></th>
  </tr>
  @foreach($cars as $car)
  <tr>
    <td>{{$car->register}}</td>
    <td>{{$car->type}}</td>
    <td>{{$car->brand}}</td>
    <td>{{$car->seat}}</td>
    <td>{{$car->pricePerDay}}</td>
    <td>
      <form class="form-inline" action="{{url('information/'.$car->id)}}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="pick-date-input" value="{{ $pickDate }}">
        <input type="hidden" name="drop-date-input" value="{{ $dropDate }}">
        <button type="submit" class="btn btn-primary">Go to book</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>
</div >
@endsection
