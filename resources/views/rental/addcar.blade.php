@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('createcar')}}">
{{ csrf_field() }}
  <fieldset>
  <div id="register">
    <div id="legend">
      <legend class="">Add Car</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Register</label>
      <div class="controls">
        <input type="text" id="re" name="re" placeholder="" class="input-xlarge" >
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Type</label>
      <div class="controls">
        <input type="text" id="type" name="type" placeholder="" class="input-xlarge" >
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Brand</label>
      <div class="controls">
        <input type="text" id="brand" name="brand" placeholder="" class="input-xlarge" >

      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Seat</label>
      <div class="controls">
        <input type="text" id="seat" name="seat" placeholder="" class="input-xlarge" >

      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">PricePerDay</label>
      <div class="controls">
        <input type="text" id="pricePerDay" name="pricePerDay" placeholder="" class="input-xlarge" >

      </div>
    </div>
 
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success" v-on:click="confirm()">Add Car</button>
      </div>
    </div>
    </div>
  </fieldset>
</form>



@endsection


