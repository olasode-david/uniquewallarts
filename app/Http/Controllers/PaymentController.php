<?php

namespace App\Http\Controllers;

use Session;
use App\Cart;
use App\User;
use Paystack;
use App\Order;
use App\BillingDetail;
use App\Http\Requests;
use App\Mail\Paidwallarts;
use App\Mail\OrderAdminMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        $check = BillingDetail::where('user_id',Auth::user()->id)->first();
        if(is_null($check))
        {
           return redirect(route('billing.create'))->with('message', 'Fill in your shipping details');
        }else{ 
            return Paystack::getAuthorizationUrl()->redirectNow();
        }
        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $carts = serialize($cart);

        $paymentDetails = Paystack::getPaymentData();

          $order_id =  $paymentDetails['data']['id'];
          $payment_id =  $paymentDetails['data']['reference'];
          $paid_on =  $paymentDetails['data']['paid_at'];
          $auth_code =  $paymentDetails['data']['authorization']['authorization_code'];
          
          Order::create([
              'user_id' => Auth::user()->id,
              'order_id' => $order_id,
              'cart' => $carts,
              'payment_id' => $payment_id,
              'paid_on' => $paid_on,
              'auth_code' => $auth_code
          ]);
          $take = BillingDetail::where('user_id',Auth::user()->id)->first();
    
          $orders = Auth::user()->paid;
          $orders->transform(function($order, $key)
          {
              $order->cart = unserialize($order->cart);
                  return $order;
          });
          
            $mail = Auth::user()->email;
            //user order mail address
          Mail::to($mail)
                ->send(new Paidwallarts($orders, $take));
            //admin known that a user order
            Mail::to('olasodedavid@gmail.com')
                ->send(new OrderAdminMail($orders, $take));

          Session::forget('cart');
            return redirect(route('welcome'))->with('message','Payment made, Comfirm the mail sent to your email address');
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    // confirmation link from an email address
    public function update(Order $id)
    {
            $id->update(['confirm' => now()]);
                return redirect(route('account'))->with('message','Payment confirmed');       
    }
}