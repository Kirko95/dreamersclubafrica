<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;

class SubscribeController extends Controller
{
    //
    public function store()
    {
        $response=['status'=>0,'message'=>'Error'];
        $subscribe=new Subscribe;
        $subscribe->email=request('email');
        if ($subscribe->save()) {
            $response['status']=1;
            $response['message']='Subscription successful. Thanks for your interest';
            return json_encode($response);
        } else {
            return  json_encode($response);
        }
    }
}
