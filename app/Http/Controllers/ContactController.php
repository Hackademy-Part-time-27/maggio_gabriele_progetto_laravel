<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewForm(){
        return view("pages.contacts");
    }

    public function send(Request $request){
        if ($request->email=='' || $request->message=='') {
          return redirect()->back()->with(['error'=>'All fields must be full!']);
        }
         \Illuminate\Support\Facades\Mail::to('admin@example.com')->send(new \App\Mail\ContactMail($request->email, $request->message));
        return redirect()->back()->with(['success'=>'Request sent successfully!']);
    }

    
}
