<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers = \App\User::all();
        return [
            'success' => true,
            'data' => $singers
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
        $singer = new \App\User;
        $singer->name = trim($request->username);
        $singer->password=trim($request->password);
        $singer->email=trim($request->email);
        $singer->phone=trim($request->tel);
        if (!empty($singer->name) && $singer->save()){
            return [
                'success' => true,
                'data' => "Singer '{$singer->name}' was saved with id: {$singer->id}",
                'id' => $singer->id
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
    public function show($id)
    {
        $singer = \App\User::find($id);
        if (!is_null($singer))
            return [
                'success' => true,
                'data' => $singer
            ];
        return [
            'success' => false,
            'data' => 'Singer not found'
        ];
    }

    public function albums($id)
    {
        $singer = \App\User::find($id);
        if (!is_null($singer)) {
            return [
                'success' => true,
                'data' => [
                    'count' => $singer->albums()->count(),
                    'albums' => $singer->albums()->get()
                ]
            ];
        } else {
            return [
                'success' => false,
                'data' => 'Singer not found'
            ];
        }
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
    public function update(Request $request)
    {
        //
        
        $singer = \App\User::where('email','=',$request->defaultmail)->first();
        $singer->name=$request->username;
        $singer->email=$request->email;
        $singer->phone=$request->phone;
        $singer->password=bcrypt($request->password);
        $singer->save();
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
