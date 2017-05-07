@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="title">Driver Information</h1><br>
<form action="{{url('confirm')}}" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="firstName" class="col-2 col-form-label">Firstname</label>
    <div class="col-10">
      <input class="form-control" type="text" name="firstName" value="{{ $firstName or "" }}" required autofocus>
    </div>
  </div>
  <div class="form-group">
    <label for="lastName" class="col-2 col-form-label">Lastname</label>
    <div class="col-10">
      <input class="form-control" type="text" name="lastName" value="{{ $lastName or "" }}" required autofocus>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-2 col-form-label">Email</label>
    <div class="col-10">
      <input class="form-control" type="email" name="email" value="{{ $email or "" }}" required autofocus>
    </div>
  </div>
  <div class="form-group">
    <label for="phoneNum" class="col-2 col-form-label">Phone Number</label>
    <div class="col-10">
      <input class="form-control" type="tel" pattern="\d+" name="phoneNum" value="{{ $phoneNum or "" }}" required autofocus>
    </div>
  </div>
  <input type="hidden" name="pick-date-input" value="{{ $pickDate }}">
  <input type="hidden" name="drop-date-input" value="{{ $dropDate }}">
  <input type="hidden" name="car" value="{{$car}}">
  <input type="hidden" name="carID" value="{{$car->id}}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
