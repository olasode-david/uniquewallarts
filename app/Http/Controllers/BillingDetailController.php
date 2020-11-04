<?php

namespace App\Http\Controllers;
use App\User;
use App\Order;
use App\BillingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillingDetailController extends Controller
{
    //  public function __construct()
    // {   if(Auth::user()->email === " ")
    //     {
    //          $this->middleware(['auth','verified']);
    //     }else{
    //         "";
    //     }
       
    // }

    public function index()
    {
        if(Auth::user()){
        
            $take = BillingDetail::where('user_id',Auth::user()->id)->first();

            $orders = Auth::user()->orders;
            $orders->transform(function($order, $key){
                $order->cart = unserialize($order->cart);
                    return $order;
            });
        }else{
            $take = "No account ";
            $orders = "No orders";
        }

        return view("billingdetail.index",[
            "detail" => $take,
            "orders" => $orders
        ]);
    }

    public function create()
    {
       $check = BillingDetail::where('user_id', Auth::user()->id)->first();
       if(is_null($check))
       {
            return view("billingdetail.create");
       }else{
        return view('billingdetail.edit',[
            'details' => $check
            ]);
       }
        
    }

    public function store(Request $request)
    {
        if($request->state === "Lagos")
        {
            $price = 1500;
        }else{
            if($request->state === "Ogun" || $request->state === "Oyo" || $request->state === "Osun" || $request->state === "Ondo")
            {
                $price = 2000;
            }else{
                $price = 3000;
            }
        }
           
      $store = $request->validate([
            "company" => ['max:255','string'],
            "street" => ['required', 'max:255'],
            "apartment" => ['max:255'],
            "town" => ['required', 'max:255'],
            "state" => ['required', 'max:255', 'string'],
            "postcode" => ['max:255'],
            "phone" => ['required'],
            "order_note" => ['max:255']
        ]);
       // dd($store);
        BillingDetail::create(
            [
                "user_id" => Auth::user()->id,
                "company" => $store['company'],
                "street" => $store['street'],
                "apartment" => $store['apartment'],
                "town" => $store['town'],
                "state" => $store['state'],
                "postcode" => $store['postcode'],
                "phone" => $store['phone'],
                "shipping_price" => $price,
                "order_note" => $store['order_note']
            ]);
            return redirect(route('item.index'));
    }

    public function edit()
    {
       $gobal =  BillingDetail::where('user_id',Auth::user()->id)->first();
        if(is_null($gobal))
        {
         return redirect()->route('billing.create'); 
        }else{
             return view('billingdetail.edit',[
            'details' => $gobal
            ]);             
        }
       
    }

    public function update(Request $request,  BillingDetail $update)
    {
        if($request->state === "Lagos")
        {
            $price = 1500;
        }else if($request->state === "Ogun" || $request->state === "Oyo" || $request->state === "Osun" || $request->state === "Ondo"){
             $price = 2000;
            }else{
                $price = 3000;
            }
    

        $put = $request->validate([
            "company" => ['max:255','string'],
            "street" => ['required', 'max:255'],
            "apartment" => ['max:255'],
            "town" => ['required', 'max:255'],
            "state" => ['required', 'max:255', 'string'],
            "postcode" => ['max:255'],
            "phone" => ['required'],
            "order_note" => ['max:255']
        ]);
        
        $update->update([
            "company" => $put['company'],
            "street" => $put['street'],
            "apartment" => $put['apartment'],
            "town" => $put['town'],
            "state" => $put['state'],
            "postcode" => $put['postcode'],
            "phone" => $put['phone'],
            "shipping_price" => $price,
            "order_note" => $put['order_note']
        ]);
        return redirect(route('account'));
    }

    
}
