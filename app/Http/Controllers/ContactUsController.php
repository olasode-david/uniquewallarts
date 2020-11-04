<?php

namespace App\Http\Controllers;


use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contactUs.create');
    }

    public function store(Request $request )
    {
          $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => 'required|email',
                'subject' => ['required', 'string', 'max:255'],
                'message' => ['required', 'string']
          ]);

            

            Mail::to("olasodedavid@gmail.com")
            ->send(new ContactUs($request->name,$request->subject,$request->message,$request->email));
          
            return back()->with('message', 'Message sent Successful, we will get back to you as soon as possible');
    }
}
