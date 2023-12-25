<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 public function contact(){
    return view('email.contact');
 }
 public function sendEmail(Request $request){
  $details = [
   'name' => $request->name,
   'email' => $request->email,
   'phone' => $request->phone,
   'Message' => $request->Message,

  ];
  Mail::to(Auth::user()->email)->send(new ContactMail($details));
  return back()->with('messge_send','your messege has been send successfuly');
}




}