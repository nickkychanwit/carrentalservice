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
    <th>Booking Status</th>
    <th>create</th>
    <th>update</th>
  </tr>
  @foreach ($bookings as $book)
  <tr>
  @foreach ($book as $b)
  <td class="info">{{$b}}</td>
  @endforeach
  <td >@if ($book->status=="receive")
        <button onclick="window.location.href='/return'" class="btn btn-success">Return</button>
        @endif
  </td>
  </tr>
  @endforeach
</table>
</div>

@endsection
