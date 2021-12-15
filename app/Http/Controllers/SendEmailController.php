<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendEmailController extends Controller
{
  public function sendorder(Request $request)
  {
    //  $this->validate($request,[
    //      'fullname' => 'required',
    //      'email' => 'required|email',
    //      'address' => 'required',
    //      'phnnumber' => 'required',
    //      'orders' => 'required',
    //      'deliveryCharge' => 'required'            
    //    ]);
    //    $myEmail = 'nicesnippets@gmail.com';
    //    Mail::to($myEmail)->send(new SendMail($request->all()));
    /**
     * 
     * {
  "_token": "VzmjNbdpWCWQAcN0Rf8HMRgiOkqapoNqcSAcP16M",
  "first_name": "Erich",
  "email": "patytyzi@mailinator.com",
  "phone_number": "+1 (995) 374-9294",
  "address": "Molestiae vero et et",
  "cart": [
    {
      "ProductName": "Maggy Melendez",
      "ActualRate": "1384.00",
      "ProductId": "2",
      "Quantity": "2",
      "CartItemId": "2",
      "ImageUrl": "http://127.0.0.1:8000/storage/null",
      "sNote": null
    },
    {
      "ProductName": "Eggss",
      "ActualRate": "200.00",
      "ProductId": "3",
      "Quantity": "2",
      "CartItemId": "3",
      "ImageUrl": "http://127.0.0.1:8000/storage/items/October2021/d5pT9WlG4ew1qcUzttfO.jpg",
      "sNote": null
    }
  ]
}
     */
    $shipping_charge = 100;
    $total = 0;
    $carts = $request->cart;

    $order = new Order();
    $order->area_id = 0;
    $order->address_description = $request->address;
    $order->shipping_charge = $shipping_charge;
    $order->total_amount = $shipping_charge;
    $order->contact_number  = $request->phone_number;
    $order->email = $request->email;
    $order->name = $request->full_name;
    $order->save();

    foreach ($carts as $cart) {
      $total += $cart['ActualRate'];
      $order_detail = new OrderDetail();
      $order_detail->order_id = $order->id;
      $order_detail->item_id = $cart["ProductId"];
      $order_detail->amount = $cart["ActualRate"];
      $order_detail->description = $cart["sNote"];
      $order_detail->quantity = $cart["Quantity"];
      $order_detail->save();
    }
    $order->total_amount = $shipping_charge + $total;

    $a = array(
      'data' => $request->cart
    );
    $a = array(
      'data' => $request->cart,
      'email' => $request->email,
      'phone_number' => $request->phone_number,
      'full_name' => $request->full_name,
      'address' => $request->address,
    );
    Mail::send('frontend.mail.orderCheckoutSuccess', $a, function ($message) use ($order) {
      $message->from(env('MAIL_USERNAME', "laatokosherofood@gmail.com"));
      $message->to($order->email, $order->full_name);
      $message->subject('Laatokosherofood Order Confirmation');
    });
  Mail::send('frontend.mail.laatokosheroordersucess', $a, function ($message) use ($order) {
      $message->from(env('MAIL_USERNAME', "laatokosherofood@gmail.com"));
      $message->to("laatokoshero@gmail.com","Food Order By Customer");
      $message->subject('Laatokosherofood Order Confirmation');
    });

    return response(["Success" => true, "Message" => "Order Successfully placed"]);
  }
}
