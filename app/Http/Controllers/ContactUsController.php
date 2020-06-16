<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class ContactUsController extends Controller
{
    //
    public function store()
    {
        $response=['status'=>0,'message'=>'Error'];
        $contact=new ContactUs;
        $contact->name=request('name');
        $contact->email=request('email');
        $contact->subject=request('subject');
        $contact->message=request('message');
        if ($contact->save()) {
            $response['status']=1;
            $response['message']='Request received. We\'ll be in touch';
            return json_encode($response);
        } else {
            return  json_encode($response);
        }
    }
}
