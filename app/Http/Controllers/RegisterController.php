<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class RegisterController extends Controller
{

    //
    public function store()
    {
        $response=['status'=>0,'message'=>'Error'];
        $register=new Register;
        $register->parent=request('parent');
        $register->child=request('child');
        $register->child_age=request('child_age');
        $register->number_of_children=request('number_of_children');
        $register->phone=request('phone');
        $register->email=request('email');
        $register->isInterestedInFinance=request('isInterestedInFinance');
        $register->package=request('package');
        if ($register->save()) {
            $response['status']=1;
            $response['message']='Registration successful. We\'ll be in touch';
            return json_encode($response);
        }
    }
}
