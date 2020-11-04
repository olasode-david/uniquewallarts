 <?php
@$time = substr(microtime()*1000,0,3);
?>
  @if (Session::has('cart'))<!-- firstt if statement -->
             @if (Session::get('cart')->totalQty === 0 && Session::get('cart')->totalPrice === 0)<!-- second if statement -->

                <div style="height:180px;">
                    <div class="row justify-content-center border-top border-bottom p-2">
                        <div class="col-md-6 col-sm-4 text-secondary">
                            <strong>no item in the cart</strong>
                        </div>
                    </div>
                </div> 
            @else<!-- second  if statement else if -->
                 @if (Session::has('cart'))<!-- third  if statement inside the first if else statement -->
            
                <table class="table table-hover  table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Canvas</th>
                                <th>Product</th>
                                <th>Status</th>
                                <th>Quantity</th>
                                <th>Prices</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        <img src="{{ $item['item']['image'] }}" 
                                            width="100px" height="100px" alt="not working">
                                    </td>
                                    <td>
                                        {{ $item['item']['title'] }}
                                    </td>
                                    <td>
                                        {{ $item['item']['status'] }}
                                    </td>
                                    <td>
                                            {{ $item['qty'] }}
                                    </td>
                                    <td>
                                        {{ number_format($item['price']) }}
                                    </td>
                                    <td>
                                        <a href="{{route('delete.cartItem', $item['item']['id'])}}" data_id="$item['item']['id']" 
                                                      class="font-weight-bolder text-danger text-decoration-none cart">
                                            &times;
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
         
                        </tbody>
        
                    </table>

                    <h3><i class="text-secondary">Cart order</i></h3>

                    <table class="table border table-responsive-sm">
                        <tbody>
                            <tr>
                                <th class="border-right">Subtotal</th>
                                <td>{{ number_format($totalprice)}}</td>
                            </tr>

                             

                            <tr>
                                <th class="border-right">Shipping</th>
                                <td>
                                    <i class="font-weight-bold text-secondary">Address:</i> {{$take->street ?? " "}} 
                                    <br>
                                    <i class="font-weight-bold text-secondary">state:</i> {{$take->state ?? " "}}
                                    <br>
                                    <i class="font-weight-bold text-secondary">shipping price:</i>
                                        {{$take->shipping_price ?? " " }}
                                </td>
                            </tr>

                            <tr>
                                <th class="border-right">Total</th>
                                <td class="d-flex justify-content-between">
                                  <div class="mr-4">  
                                        {{ number_format($totalprice + @$take->shipping_price ) ?? $totalprice }}
                                  </div>
                                  <div>
                                    @if (@$take->shipping_price)
                                        {{"Shipping price added"}}
                                    @else
                                        {{" "}}
                                    @endif
                                  </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
              

            <!-- checkout payment method --> 
           {{@$bill}}
            @guest
                    
                         <a href="{{route('register')}}" class="btn btn-success">
                            <i class="fa fa-plus-circle fa-lg"></i> Register an account
                        </a>  
                    
               
                     
                @else

                    <div class=" d-sm-flex  mb-2">
                        <span class="text-secondary mr-1" style="margin-top:35px; font-size:13px;">
                            Debit/Credit Cards
                        </span>
                        <img src="{{asset('icons/paystack-payment.png')}}" alt=""/>
                    </div>
                    <span class="text-secondary" style="margin-top:35px; font-size:14px;">
                        Make payment using your debit and credit cards
                    </span>

                    <form method="POST" 
                    
                            action="{{ route('pay') }}"
                    
                        
                        accept-charset="UTF-8" class="form-horizontal mt-3" role="form">
                        <div class="row" >
                            
                            
                                <input type="hidden" name="email" value="olasodedavid@gmail.com"> {{-- required --}}
                                <input type="hidden" name="order_id" value="{{$time}}">
                                <input type="hidden" name="amount" value="{{ $totalprice + @$take->shipping_price * 100 ?? $totalprice}}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="{{Session::get('cart')->totalQty}}">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'auth()->user()->name']) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                @csrf
                    
                                <p>
                                <button class="btn btn-success ml-3" type="submit" value="Pay Now!">
                                    <i class="fa fa-plus-circle fa-lg"></i> check out
                                </button>
                                </p>
                            
                        </div>
                    </form>
                @endguest

            <!-- the end code -->
                    
                    

            
            @endif <!-- third if statement endif -->  




            @endif<!-- second if statement endif -->

             @else<!-- first if statement else -->
                <div style="height:180px;">
                    <div class="row justify-content-center border-top border-bottom p-2">
                        <div class="col-md-6 col-sm-4 text-secondary">
                            <strong>no item in the cart</strong>
                        </div>
                    </div>
                </div>  
        @endif<!-- first if statement endif -->
           
                   
           