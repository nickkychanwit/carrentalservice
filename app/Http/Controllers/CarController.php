<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        return view('rental.addcar');
    }

    public function show($id)
    {
        $client = new \GuzzleHttp\Client();
        $call = "singers/{$id}";
        $response = $client->request('GET', "{$this->api}{$call}", [
            'form_params' => []
        ]);
        $resBody = $response->getBody();
        $res = json_decode($resBody);

        // Todo: request album from /api/singers/$id/albums

        return view('singers.show', [
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => !is_null($res)? $res->success: false,
            'data' => !is_null($res)?$res->data: null,
            'resBody' => $response->getBody()
        ]);
    }

    public function store(Request $request)
    {

      $car = new \App\Car;
      $car->register = trim($request->re);
      $car->type = trim($request->type);
      $car->brand = trim($request->brand);
      $car->seat = trim($request->seat);
      $car->pricePerDay = $request->pricePerDay;
      if (!empty($car->register) && $car->save()){
          return [
            'success' => true,
            'data' => "Car '{$car->name}' was saved with id: {$car->id}",
            'id' => $car->id
        ];
      } else {
          return [
              'success' => false,
              'data' => "Some error occurred"
            ];
      }
    }

    public function create() {
        return view('singers.create');
    }

    public function register() {
        return view('register.create');
    }
}
