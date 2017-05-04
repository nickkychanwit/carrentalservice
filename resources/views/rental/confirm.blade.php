@extends('layouts.master')

@section('content')
<h1 class="title">Please check your information</h1><br>
<br>
<form class="form-group" action="{{url('confirmed/'.$car->id)}}" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <table class="table table-striped">
    <tr>
      <th>Register</th>
      <th>Type</th>
      <th>Brand</th>
      <th>Seat</th>
      <th>Price per day (Baht)</th>
    </tr>
    <tr>
      <td>{{$car->register}}</td>
      <td>{{$car->type}}</td>
      <td>{{$car->brand}}</td>
      <td>{{$car->seat}}</td>
      <td>{{$car->pricePerDay}}</td>
    </tr>
  </table>

  <label for="pick-date-input" class="col-2 col-form-label">Pick up Date</label>
  <input class="form-control" type="text" name="pick-date-input" value="{{ $pickDate }}" placeholder="{{ $pickDate }}" readonly>
  <label for="drop-date-input" class="col-2 col-form-label">Drop off Date</label>
  <input class="form-control" type="text" name="drop-date-input" value="{{ $dropDate }}" placeholder="{{ $dropDate }}" readonly>
  <label for="firstName" class="col-2 col-form-label">Firstname</label>
  <input class="form-control" type="text" name="firstName" value="{{ $firstName }}" placeholder="{{ $firstName }}" readonly>
  <label for="lastName" class="col-2 col-form-label">Lastname</label>
  <input class="form-control" type="text" name="lastName" value="{{ $lastName }}" placeholder="{{ $lastName }}" readonly>
  <label for="email" class="col-2 col-form-label">Email</label>
  <input class="form-control" type="text" name="email" value="{{ $email }}" placeholder="{{ $email }}" readonly>
  <label for="phoneNum" class="col-2 col-form-label">Phone Number</label>
  <input class="form-control" type="text" name="phoneNum" value="{{ $phoneNum }}" placeholder="{{ $phoneNum }}" readonly>
  <input type="hidden" name="car" value="{{$car}}">
  <br>
  <button type="submit" class="btn btn-primary" name="button" value="confirm">Confirm</button>
  <button type="submit" class="btn btn-danger" name="button" value="back">Edit Driver Information</button>
</form>



@endsection
