<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    public function customized()
    {
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        if (Session::has('cart')){
            $view = $cart->items;
        }else{
            $view = "";
        }

        return view('categories.customized',[
            'items' => Item::where('type', 'customized')->latest()->get(),
            'locates' => $view
        ]);
    }

    public function animated()
    {
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        if (Session::has('cart')){
            $view = $cart->items;
        }else{
            $view = "";
        }

        return view('categories.animated',[
            'items' => Item::where('type', 'animated')->latest()->get(),
            'locates' => $view
        ]);
    }

    
}
