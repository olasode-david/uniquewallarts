<?php

namespace App\Http\Controllers;


use App\Mail\LMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function index()
    {
        return view('message');
    }

    public function store(Request $request)
    {
        $request->validate([
            'guest'=> ['required', 'string', 'max:255'],
            'email'=> ['required','email', 'string', 'max:255'],
            'message'=> ['required', 'string', 'max:255']
        ]);
            Mail::to("olasodedavid@gmail.com")
                ->send(new LMessage($request->guest, $request->email, $request->message));

                return back()->with('message', 'Message sent successfully');
    }
}
