<?php

namespace App\Http\Controllers;

use Session;
use App\Cart;
use App\Item;
use App\Subscribe;
use App\Mail\Upload;
use App\BillingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ItemController extends Controller
{
   
    
    //this is d main view homepag
    public function welcome(){
        //homepage view 
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        if (Session::has('cart')){
            $view = $cart->items;
        }else{
            $view = "";
        }
        
        return view('welcome',[
            'items' => Item::take(12)->latest()->get(),
            'moves' => Item::take(12)->get(),
            'locates' => $view
        ]);
    }

    //this display the cart view
    public function index()
    { 
        if(Auth::user())
        {
            $take = BillingDetail::where('user_id',Auth::user()->id)->first();
        }else{
            $take = " ";
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);

            return view('items.index',[
                'items' => $cart->items, 'totalprice' => $cart->totalPrice,
                "take" => $take
            ]);
    }

    //this is the reload full cart view indexload ==== index cart item 
    public function indexload()
    { 
        if(Auth::user())
        {
            $take = BillingDetail::where('user_id',Auth::user()->id)->first();
        }else{
            $take = " ";
        }
        
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);

            return view('reload.indexload',[
                'items' => $cart->items, 'totalprice' => $cart->totalPrice,
                "take" => $take                
            ]);
    }

    
    // this is to show a card  cart item details
    public function show(Item $item)
    {
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        if (Session::has('cart')){
            $view = $cart->items;
        }else{
            $view = "";
        }
        
        return view('items.show', [
            'item' => $item,
            'locates' => $view
        ]);
    }

    // this is to show a create view for storing new item 
    public function create()
    {
        return view('items.create'); 
    }

    //this grab the request from the cretae view and store it in the database
    public function store()
    {
      $item = new Item;
        $items = $this->attributeValidation();
        $items['image'] = request('image')->store('images');
        $item->create($items);

            return redirect(route('welcome'));
    }

    //this is to show an edit view for updating a previous card cart in the database and grab the item id for easy update
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }
    
    //this grab d request data and d id of the item for update for easy update by calling the update method
    public function update(Item $update)
    {
        $detail = request()->validate([
            'title'=> ['required', 'string', 'max:255'],
            'image'=> ['file'],
            'type'=>  ['string', 'max:255'],
            'price'=> ['required', 'max:255'],            
            'body'=> ['required', 'string'],
            'status'=> ['string', 'max:255'],
            'size'=> ['required', 'max:255'],
            'turn' => ['string', 'max:255']
        ]);

        if(request('image'))
        {
            $detail['image'] = request('image')->store('images');
        }

        $update->update($detail);
            return redirect(route('welcome'));
         
    }

    //this delete the item from the database by grabbing the id and calling delete method
    public function destroy(Item $item)
    {
       $item->delete();
       return back();
    }
     
    public function attributeValidation()
    {
       return request()->validate([
            'title'=> ['required', 'string', 'max:255'],
            'image'=> ['required', 'file'],
            'type'=>['required', 'string', 'max:255'],
            'price'=> ['required', 'max:255'],            
            'body'=> ['required', 'string'],
            'status'=> ['required', 'string', 'max:255'],
            'size'=> ['required', 'max:255']
        ]);
    }

    //adding to cart method 
    public function AddToCart($id)
    {
        $item = Item::findOrFail($id);
            $oldcart = Session::has('cart') ? Session::get('cart') : null;
                $cart = new Cart($oldcart);
                    $cart->add($item, $item->id);
                         Session::put('cart', $cart);
                              return redirect(route('welcome'));
                        
    }

    // public function updateItem(Request $request, $id)
    // {
    //     $oldcart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldcart);

    //     $quantity = $request->quantity;
    //     $item = Item::findOrFail($id);
    //     $cart->updateItem($item, $id, $quantity);
    //     Session::put('cart', $cart);
    //         return response()->json(['success' => true]);
    // }

    
    //removing item from a cart function
    public function DeleteCartItem($id)
    {

        $oldcart = Session::has('cart') ? Session::get('cart') : null;
                $cart = new Cart($oldcart);

           $cart->totalQty -= $cart->items[$id]['qty']; 
          $cart->totalPrice -= $cart->items[$id]['price'];
        unset($cart->items[$id]);
            
         if(empty(Session::get('cart')))
         {
             Session::forget('cart');
         }else{
            Session::put('cart', $cart);
         }
        
               return back(); //redirect(route('item.index'));
    }

    

    

    
}
