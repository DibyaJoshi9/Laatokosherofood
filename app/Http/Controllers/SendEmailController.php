<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phnnumber' => 'required',
            'orders' => 'required',
            'deliveryCharge' => 'required'            
          ]);
    }
}
