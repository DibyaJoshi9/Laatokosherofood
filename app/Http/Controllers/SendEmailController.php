<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
    public function sendorder(Request $request){
        //  $this->validate($request,[
        //      'fullname' => 'required',
        //      'email' => 'required|email',
        //      'address' => 'required',
        //      'phnnumber' => 'required',
        //      'orders' => 'required',
        //      'deliveryCharge' => 'required'            
        //    ]);
           $myEmail = 'nicesnippets@gmail.com';
           Mail::to($myEmail)->send(new SendMail());
   
    }
}
