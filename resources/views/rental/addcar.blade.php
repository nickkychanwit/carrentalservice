@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><label><p>Add car</p></label></div>
              <div class="panel-body">
                <form method="POST" action="{{route('createcar')}}">
                {{ csrf_field() }}
                  <fieldset>
                  <div id="register">

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
                      <div class="controls" style="margin-top:10px">
                        <button class="btn btn-success" v-on:click="confirm()">Add Car</button>
                      </div>
                    </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>



@endsection
