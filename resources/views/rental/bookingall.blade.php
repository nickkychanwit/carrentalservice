@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-bordered table-hover">
  <tr>
    <th>Booking ID</th>
    <th>register</th>
    <th>firstName</th>
    <th>lastName</th>
    <th>email</th>
    <th>phoneNum</th>
    <th>pickDate</th>
    <th>dropDate</th>
    <th>create</th>
    <th>update</th>
    <th>Booking Status</th>
  </tr>
  @foreach ($bookings as $book)
  <tr>
  @foreach ($book as $b)
  <td class="info">{{$b}}</td>

  @endforeach
  </tr>
  @endforeach
</table>
</div>

@endsection
