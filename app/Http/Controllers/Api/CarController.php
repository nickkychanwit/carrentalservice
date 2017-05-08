<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $car = \App\Car::all();
        return [
            'success' => true,
            'data' => $car,
            're' =>'',
        'type' =>'',
        'brand' => '',
        'seat' => '',
        'pricePerDay' => '',
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
      $car = new \App\Car;
      $car->register = trim($request->register);
      $car->type = trim($request->type);
      $car->brand = trim($request->brand);
      $car->seat = trim($request->seat);
      $car->pricePerDay = $request->pricePerDay;
      if (!empty($car->name) && $car->save()){
          return [
            'success' => true,
            'data' => "Promotion '{$car->name}' was saved with id: {$car->id}",
            'id' => $car->id
        ];
      } else {
          return [
              'success' => false,
              'data' => "Some error occurred"
            ];
      }



      /*
      $input = $request->all();
      if (trim($request->password) == '') {
          $input = $request->except('password');
      } else {
        $input = $request->all();
      }
      if ($file = $request->file('image')) {
        $name = time() . $file->getClientOriginalName();
        $file->move('images', $name);
        // console.log($name);
        // $input['photo_id'] = $photo->id;
    }
    $input['password'] = bcrypt($request->password);
    // User::create($input);
    return [
              'success' => false,
              'data' => $file
            ];
*/
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
         $car = DB::table('car')->get();
         return view('car',['data'=>$car]);
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
