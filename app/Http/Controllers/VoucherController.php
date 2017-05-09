<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;
use Session;

class VoucherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $voucher = Voucher::all();
      return view('voucher',compact('vouchers'));
    }

    public function store(Request $request)
    {
      $this->validate($request,array(
        '$name' => 'required|max:255',
        '$description' => 'required',
        '$startDate' => 'required',
        '$endDate' => 'required',
        '$discount' => 'required',
        '$pointCosume' => 'required'
      ));
      $voucher = new Voucher();
      $voucher->name = $request->input('$name');
      $voucher->description = $request->input('$description');
      $voucher->startDate = $request->input('$startDate');
      $voucher->endDate = $request->input('$endDate');
      $voucher->discount = $request->input('$discount');
      $voucher->pointCosume = $request->input('$pointCosume');
      $voucher->save();
      $request->session()->flash('alert-success', 'Save Successful.');

      return redirect()->route('voucher');

      // $data = array('vcname'=>$name,"vcstartdate"=>$startDate,"vcexpdate"=>$endDate,"vcdiscount"=>$discount,"vcpoint"=>$pointCosume,"vcdescript"=>$description);
      //
      // DB::table('vouchers')->insert($data);
    }
}
