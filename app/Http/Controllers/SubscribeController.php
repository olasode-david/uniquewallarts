<?php

namespace App\Http\Controllers;
use App\Item;
use App\Subscribe;
use App\Mail\Upload;
use App\Mail\Subscribes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $sub = $request->validate([
            'email' => 'required|email'
        ]);
            if(Subscribe::where('email',request('email'))->first()){
                return back()->with('message', 'This email already exist');
            }

        Subscribe::create($sub);
          //  $emails = request('email');
          
        Mail::to(request('email'))
            ->send(new Subscribes());

             return back()->with('message', 'Subscription Successful');
    }
//will work on it when d site is hosted 
    public function destroy( $delete)
    {
       // $deletes = Subscribe::where('email', $delete)->get();
        DB::delete('delete from subscribes where email = ?',[$delete]);
       // Subscribe::delete($deletes->id);
            return redirect(route('welcome'))->with('message', 'Subscription email deleted successfully');
    }//when hosted

    //sending mail to multiple users that subscribes
    public function sendMail()
    {
        $item = Item::take(4)->latest()->get();
            $take = Subscribe::select('email')->pluck('email')->toArray();
                foreach ($take as $value)
                {

                    Mail::to($value)
                    ->send( new Upload($item, $value));

                }
         return redirect(route('welcome'));
    }

}
