<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    //
    public function store()
    {
        $response=['status'=>0,'message'=>'Error'];
        $quote=new Quote;
        $quote->name=request('name');
        $quote->email=request('email');
        $quote->kids=request('kids_number');
        $quote->phone=request('phone');
        $quote->message=request('message');

        if ($quote->save()) {
            $response['status']=1;
            $response['message']='Quote received successfully. We\'ll be in touch';
            return json_encode($response);
        }
    }
}
