<x-master>
   <div class="container">

        <div class="mb-3 ">
           <h5 class="text-center">
                <a href="{{route('welcome')}}" class="text-decoration-none text-dark" title="Home">
                    Home
                </a> 
                /
                <i class="text-primary" title="Account">
                    Account
                </i> 
           </h5>           
        </div>


        @if(Auth::user())
         
        <div class="bg-danger text-light p-2 mb-3" style=" margin:0 auto; height:auto;">
            <p class=" text-center text-bold text-small">
                These view is your  personal data, which can only be seen by the owner of the account
            </p>
        </div>


        <div class="row">

            <div class="col-md-5 col-sm-4">

                <div style="position:relative">

                    <img src="{{ asset('wallpaper/IMG-20200509-WA0024.jpg') }}"
                        class="rounded" width="100%" height="200px"/>

                    <div style="position:absolute; left:calc(50% - 75px); top:140px;">
                        <img src="{{ asset('images/choose.jpg') }}" class="rounded-circle" width="150px" height="100px"/> 
                    </div>

                    <a href="{{route('billing.edit',auth()->user()->id)}}"
                        class="text-dark text-decoration-none"
                      style="position:absolute; right:10px; top:5px;">
                        edit
                    </a>

                </div>

        
                <div class="mt-5">
                    <table class="table table-responsive-sm ">
                       <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{auth()->user()->name}}</td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>{{auth()->user()->email}}</td>
                            </tr>

                            <tr>
                                <td>Tell no</td>
                                <td>{{$detail->phone ?? " " }}</td>
                            </tr>

                            <tr>
                                <td>Address</td>
                                <td>{{$detail->street ?? " " }}</td>
                            </tr>

                            <tr>
                                <td>Apartment</td>
                                <td>{{$detail->apartment ?? " " }}</td>
                            </tr>

                            <tr>
                                <td>Town</td>
                                <td>{{$detail->town ?? " " }}</td>
                            </tr>

                            <tr>
                                <td>State</td>
                                <td>{{$detail->state ?? " " }}</td>
                            </tr>

                            <tr>
                                <td>Shipping price</td>
                                <td>
                                {{$detail->shipping_price ?? " " }}
                                </td>
                            </tr>

                            <tr>
                                <td>Postcode</td>
                                <td>{{$detail->postcode ?? " " }}</td>
                            </tr>

                            <tr>
                                <td>Order note</td>
                                <td>{{$detail->order_note ?? " " }}</td>
                            </tr>

                       </tbody> 
                    </table>
                </div>
            
            </div>


            <div class="col-md-7 col-sm-4 pan" >
                <h3 class="text-center">My orders</h3>
                <div class="">
                    @foreach ($orders as $order)
                    
                        <div class="card text-center mb-3 " >
                            <div class="card-header d-flex justify-content-between ">
                                <i>Transaction date:</i>
                                @if ($order->confirm)
                                    <img src="{{ asset('icons/confirm-purchase.svg') }}" width="30px">
                                @else
                                    <div>
                                         Payment !confirmed
                                    </div>
                                @endif
                                <div>{{$order->created_at->diffForHumans()}}</div>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach ($order->cart->items as $item)
                                        <li class="list-group-item d-flex justify-content-between">
                                            <img src="{{$item['item']['image']}}" width="40px" height="50px" class="rounded"/>
                                            <span class="badge">{{ number_format($item['price']) }}</span>
                                            {{$item['item']['title']}} || {{$item['qty']}} Units
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="card-footer text-muted">
                                <strong class=" d-flex justify-content-between">
                                    <i>Total price:</i>
                                    <div>
                                        {{ number_format($order->cart->totalPrice + $detail->shipping_price)}}
                                    </div> 
                                </strong>
                            </div>
                        </div>
                   
                    @endforeach
                </div>

                    <div>
            
            </div>



            </div>
            
        </div>

        @else
                    <p class="text-center text-secondary border-top border-bottom">{{$detail}}</p>
        <div class=" d-flex justify-content-center mr-3 " style="height:200px">
                                <div>
                                    <a href="{{route('register')}}" 
                                        class="mr-3  text-decoration-none">
                                        <i class="fa">&#xf023;</i> Sign up
                                    </a>
                                </div>
                                @if (Route::has('register'))
                                    <div>
                                        <a href="{{route('login')}}" 
                                            class=" text-decoration-none">
                                            <i class="fa">&#xf2be;</i> Sign in
                                        </a>
                                    </div>
                                @endif                               
            </div>
                        <div>
                        
                        </div>
                        
                           
        @endif
    </div>
</x-master>