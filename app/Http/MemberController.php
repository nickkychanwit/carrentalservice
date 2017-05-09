<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    private $api = "http://carrentalservice.dev/api/";


    public function __construct()
    {
        $this->middleware("auth", [
                'only' => ['create']
            ]);
    }

    public function index()
    {
        //dd(auth()->user());
        return redirect('/home');
        $client = new \GuzzleHttp\Client();
        $call = "singers";
        $response = $client->request('GET', "{$this->api}{$call}", [
            'form_params' => []
        ]);
        $resBody = $response->getBody();
        $res = json_decode($resBody);
        return view('singers.index', [
            'statusCode' => $response->getStatusCode(),
            'responseHeader' => $response->getHeader('content-type')[0],
            'success' => $res->success,
            'data' => $res->data,
            'resBody' => $response->getBody()
        ]);
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
    public function save($id)
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

    public function create() {
        return view('singers.create');
    }
    public function edit() {
        return view('member.edit');
    }
}
