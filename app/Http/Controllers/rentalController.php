<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;
use App\Booking;
use Carbon\Carbon;
use DB;


class RentalController extends Controller
{

  public function index()
  {
    $data['title'] = 'Search';
    return view('rental.serch',$data);
  }
  public function booking(Request $request)
  {
    $this->validate($request, [
           'pick-date-input' => 'required',
           'drop-date-input' => 'required',
         ]);
    $data['title'] = 'Detail';
    $data['pickDate'] = $request['pick-date-input'];
    $pickDate = str_replace("-", "", $request['pick-date-input']);
    $data['dropDate'] = $request['drop-date-input'];
    $dropDate = str_replace("-", "", $request['drop-date-input']);
    $objs = DB::select("SELECT * FROM cars WHERE register NOT IN (SELECT register FROM bookings WHERE (dropDate >= $pickDate and pickDate <= $pickDate) or (dropDate >= $dropDate and pickDate <= $dropDate))");
    $data['cars'] = $objs;
    return view('rental.detail',$data);
  }
  public function bookingAll(Request $request)
  {

    $objs = DB::select("SELECT * FROM bookings ");
    $data['bookings'] = $objs;
    return view('rental.bookingall',$data);
  }
  public function information(Request $request,$id)
  {
    $data['title'] = 'Driver Information';
    $data['pickDate'] = $request['pick-date-input'];
    $data['dropDate'] = $request['drop-date-input'];
    $obj = Car::find($id);
    $data['car'] = $obj;
    return view('rental.information',$data);
  }
  public function confirm(Request $request)
  {
    $this->validate($request, [
           'firstName' => 'required',
           'lastName' => 'required'
         ]);
    $data['title'] = 'check';
    $data['pickDate'] = $request['pick-date-input'];
    $data['dropDate'] = $request['drop-date-input'];
    $data['firstName'] = $request['firstName'];
    $data['lastName'] = $request['lastName'];
    $data['email'] = $request['email'];
    $data['phoneNum'] = $request['phoneNum'];
    $obj = Car::find($request['carID']);
    $data['car'] = $obj;
    return view('rental.confirm',$data);
  }
  public function confirmed(Request $request,$id)
  {

    $data['title'] = 'check';
    $data['pickDate'] = $request['pick-date-input'];
    $data['dropDate'] = $request['drop-date-input'];
    $data['firstName'] = $request['firstName'];
    $data['lastName'] = $request['lastName'];
    $data['email'] = $request['email'];
    $data['phoneNum'] = $request['phoneNum'];
    $pick = Carbon::parse($request['pick-date-input']);
    $end = Carbon::parse($request['drop-date-input']);
    $data['dateDiff'] = $end->diffInDays($pick);
    $obj = Car::find($id);
    $data['car'] = $obj;
    if($request['button']=='confirm'){
      $objBook = new Booking();
      $objBook->register=$obj->register;
      $objBook->firstName=$request['firstName'];
      $objBook->lastName=$request['lastName'];
      $objBook->email=$request['email'];
      $objBook->phoneNum=$request['phoneNum'];
      $objBook->pickDate=$request['pick-date-input'];
      $objBook->dropDate=$request['drop-date-input'];
      $objBook->save();
      return view('rental.confirmed',$data);

    }else{
      return view('rental.information',$data);
    }
  }
  public function bookingReturn(Request $request)
  {

    $objs = DB::select("SELECT * FROM bookings ");
    $data['bookings'] = $objs;
    return view('rental.return',$data);
  }
  public function bookingReceive(Request $request)
  {

    $objs = DB::select("SELECT * FROM bookings ");
    $data['bookings'] = $objs;
    return view('rental.receive',$data);
  }


}
