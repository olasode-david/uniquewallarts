<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function allaccount()
    {
        $user = User::all('id');
        
         return view('admin.allaccount',[
            'user' => User::all(),
        ]);
    }

    public function subscribeEmail()
    {
        $emails = Subscribe::all();

        return view('Admin.subscribedemail',compact('emails'));
        
    }
}
