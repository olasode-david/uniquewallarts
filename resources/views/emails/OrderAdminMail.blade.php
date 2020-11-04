<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

body
    {
        background-color:#F8F8F8;
        font-family: arial, sans-serif;
        font-size:13px;
        font-style:italic;
        font-weight:600;
        color:#444;
        letter-spacing:1px;
    }
     .container
    {
        width:70%;
        margin:0 auto;
    }
    @media (max-width:568px)
    {
        .container
        {
            width:100%;
            margin:0 auto;
        }

    }
    h2
    {
        text-align:center;
        color:#666;
    }
    table 
    {
       
        border-collapse: collapse;
        width: 100%;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    td, th 
    {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) 
    {
        background-color: #dddddd;
    }
     .center
    {
        text-align:center;
    }
    
    .btn
    {
       
        border:1px solid #666;
        padding:5px;
        text-decoration:none;
        border-radius:5px;
        margin:5px;
        display:inline-block;
        font-weight:800; 
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05);      
    }
    .btn:hover
    {
        background-color:#aaa;
        color:#fff;
        
    }
    
    p
    { 
        text-align:justify;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>
            Uniquewallarts
        </h2>
         @foreach ($carts as $order)
        <p class="center">
            Paid items your order ID is {{$order->order_id}}
        </p>
        <p>
            Thanks for purchasing these canvas wall arts from Uniquewallarts, click on this link to confirm your 
            <a href="{{route('confirm',$order->id)}}" class="btn">
                cash-payment
            </a>
        </p>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>price</th>
                </tr>
            </thead>
       
            <tbody>
                @foreach ($order->cart->items as $item)
                    <tr>
                        
                            <td>
                                <img src="{{ $item['item']['image'] }}" width="130px">
                            </td>

                            <td>
                                {{ $item['item']['title'] }}
                            </td>
                            
                            <td>
                                {{ number_format($item['price']) }}
                            </td>
                       
                    </tr>
                 @endforeach
                <tr>
                    <th>Shipping address</th>
                    <td style="line-height:18px;">
                        <div>
                            State: {{ $address->state ?? " " }} 
                        </div>
                        <div>
                            Address: {{ $address->street ?? " " }}
                        </div>
                        <div>
                            Apartment: {{ $address->apartment ?? " " }}
                        </div>
                        <div>
                            town: {{ $address->town ?? " " }}
                        </div>
                        <div>
                            Postcode: {{ $address->postcode ?? " " }}
                        </div>   
                    </td>
                </tr>

                <tr>
                    <th>Shipping price</th>
                    <td>{{number_format($address->shipping_price)}}</td>
                </tr>

                <tr>
                    <th>Total price</th>
                    <td>{{number_format($order->cart->totalPrice)}}</td>
                </tr>

                <tr>
                    <th>Total Paid</th>
                    <td>
                        {{number_format($order->cart->totalPrice + $address->shipping_price)}}
                        <img src="{{ asset('icons/confirm-purchase.svg') }}" width="30px" style="float:right">
                    </td>
                </tr>
            </tbody>
        @endforeach
            
        </table>
        
        <p>
            Thanks for shopping with us. We will be expecting from you anytime soon 
            <a href="{{ route('welcome') }}" target="_blank" class="btn btn-secondary">
                Shop Now
            </a> 
        </p>

         <footer>
            <p class="center" style="color:#aaa">&copy; Uniquewallarts {{date('Y')}}. All rights reserved.</p>
        </footer>    
        
    </div>
</body>
</html>