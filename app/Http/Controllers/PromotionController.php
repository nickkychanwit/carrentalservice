<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\promotions;
use Illuminate\Support\Facades\DB;


class PromotionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $promotions = \App\Promotion::all();
        return [
            'success' => true,
            'data' => $promotions
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $v = Validator::make($request->all(), [
       'title' => 'required|unique|max:255',
       'body' => 'required',
       ]);

       if ($v->fails())
       {
           return redirect()->back()->withErrors($v->errors());
       }
      $promotion = new \App\Promotion;
      $promotion->name = trim($request->name);
      $promotion->startDate = trim($request->startDate);
      $promotion->expDate = trim($request->expDate);
      $promotion->img =trim($request->img);
      $promotion->dcType = trim($request->dcType);
      $promotion->dc = trim($request->dc);
      $promotion->descript = trim($request->descript);
      if (!empty($promotion->name) && $promotion->save()){
          return [
            'success' => true,
            'data' => "Promotion '{$promotion->name}' was saved with id: {$promotion->id}",
            'id' => $promotion->id

        ];
      } else {
          return [
              'success' => false,
              'data' => "Some error occurred"
            ];
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $promotion = DB::table('promotions')->get();
        return view('promotion',['data'=>$promotion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
} 
