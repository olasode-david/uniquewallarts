<?php

namespace App;

class Cart 
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

            public function __construct($oldcart)
            {
                if($oldcart)
                {
                    $this->items = $oldcart->items;
                    $this->totalQty = $oldcart->totalQty;
                    $this->totalPrice = $oldcart->totalPrice;
                }
            }

            public function add($item, $id)
            {
                $storedItem = ['qty' => 0 , 'price' => $item->price, 'item' => $item ];
                    if($this->items)
                    {
                        if(array_key_exists($id, $this->items))
                         {
                          $storedItem = $this->items[$id];
                         }
                    }
                $storedItem['qty']++;
                $storedItem['price'] = $item->price * $storedItem['qty'];
                $this->items[$id] = $storedItem;
                $this->totalQty++;
                $this->totalPrice += $item->price;
            }

            // public function updateItem($item, $id, $quantity)
            // {
            //     $this->items['id']['qty'] = $quantity;
            //     $this->items['id']['price'] = $quantity * $item->price;

            //     $this->totalQty = 0;
            //     foreach($this->items as $element)
            //     {
            //         $this->totalQty += $element['qty'];
            //         $this->totalprice = $this->totalQty * $item->price;
            //     }
            // }
           
}
