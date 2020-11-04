<?php

namespace App\Http\Controllers;
use App\Support;
use App\Mail\Supports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function create()
    {
        return view('support.create');
    }

    public function store(Request $request)
    {
       $store = $request->validate([
            'name' => ['string', 'max:255', 'required'],
            'email' => "required|email",
            'question' => ['required', 'max:255']
        ]);

        Support::create($store);

        Mail::to('olasodedavid@gmail.com')
            ->send(new Supports( $request->name,  $request->email,  $request->question));
            
    return redirect(route('welcome'))->with('message', 'Will get back to you as soon as possible');
    }
}
