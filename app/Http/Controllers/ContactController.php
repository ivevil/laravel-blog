<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {

        return view('contact');
    }
    
    public function send(Request $request) 
    {
        
        
        Mail::send('contact',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'phone_number' => $request->get('phone'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('ivevil@gmail.com');
               });
    }
}
