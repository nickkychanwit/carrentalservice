@extends('layouts.app')

@section('content')
@if (Auth::check()){
<div class="container" id="serch" >
  <h1 class="title">Search for rental cars</h1><br>
<form action="{{url('booking')}}" method="post">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <div class="form-group">
    <div class="form-group{{ $errors->has('pick-date-input') ? ' has-error' : '' }}">
      <label for="pick-date-input" class="col-2 col-form-label">Pick up date</label>
      <div class="col-10">
        <input class="form-control" type="date" name="pick-date-input" max="" value="{{old('pick-date-input')}}" onchange="updateDrop()" id="pick-date-input">
        @if ($errors->has('pick-date-input'))
          <span class="help-block">
            <strong>The Pick up date field is required.</strong>
          </span>
        @endif
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group{{ $errors->has('drop-date-input') ? ' has-error' : '' }}">
      <label for="drop-date-input" class="col-2 col-form-label">Drop off date</label>
      <div class="col-10">
        <input class="form-control" type="date" name="drop-date-input" min="" value="{{old('drop-date-input')}}" onchange="updatePick()" id="drop-date-input">
        @if ($errors->has('drop-date-input'))
          <span class="help-block">
            <strong>The Drop up date field is required.</strong>
          </span>
        @endif
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
@endsection
@section('script')
<script>
function updateDrop(){
  var minDate = document.getElementById('pick-date-input').value;
  $('#drop-date-input').prop('min', minDate);
}
function updatePick(){
  var maxDate = document.getElementById('drop-date-input').value;
  $('#pick-date-input').prop('max', maxDate);
}
</script>
@else  <?php echo "<script>window.location = 'http://carrentalservice.dev/login'</script>" ?>
@endif
@endsection
