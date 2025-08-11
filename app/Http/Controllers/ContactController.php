<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function create()
    {
        return view("contact");
    }
    public function send(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "first_name"   => ["required", "min:3"],
            "last_name"    => ["nullable", "min:3"],
            "state"        => ["required"],
            "city"         => ["required"],
            "email"        => ["required", "email"],
            "phone-number" => ["required", "numeric", "digits:10"],
            "message"      => ["required", 'min:3', "max:255"],
        ]);

        $data = $validator->validated();
 
        // This sends it directly but takes a bit of time, that's why we send the request to the queue, for the worker to take care of it in the background        
        // Mail::to('vltm109@gmail.com')->send(new ContactMail($data)); 
        
        Mail::to('vltm109@gmail.com')->queue(new ContactMail($data));

        return back()->with('success','El mensaje ha sido enviado!');
    }
}
