<?php

namespace App\Http\Controllers;

use App\Paret;
use App\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ParetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $response=["status"=>0,"message"=>"Error occurred!"];
        $parent = Paret::create([ 'first_name'=>$request->input('first_name'),"last_name"=>$request->input('last_name'),"email"=>$request->input('email'),"phone"=>$request->input('phone')]);
        for ($i=0; $i < count($request->child_first_name); $i++) {
            $children[]=[
            'first_name'=>$request->child_first_name[$i],
            'last_name'=>$request->input('child_last_name')[$i],
            'email'=>$request->input('child_email')[$i],
            'phone'=>$request->input('child_phone')[$i],
            'package'=>$request->input('package')[$i]];
            $parent->children()->create($children[$i]);
        }
        if ($parent) {
            $response['status']=1;
            $response['message']='Registration successful. We\'ll be in touch';
            return json_encode($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paret  $paret
     * @return \Illuminate\Http\Response
     */
    public function show(Paret $paret)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paret  $paret
     * @return \Illuminate\Http\Response
     */
    public function edit(Paret $paret)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paret  $paret
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paret $paret)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paret  $paret
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paret $paret)
    {
        //
    }
}
