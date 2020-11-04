<x-master>
    <div class="container">
        @foreach ($user as $users)
           <ul class="list-group mb-2">
                <li class="list-group-item d-flex justify-content-between bg-success">
                    <div>
                        {{$users->name}}
                    </div>
                    <div> 
                        {{$users->email}}
                    </div>
                </li>
                 <h3 class="text-center mt-1">User orders</h3>
                <div class="">

                @foreach ($users->orders->transform(function($order, $key){
                                  $order->cart = unserialize($order->cart);
                                             return $order;}); as $take)
                    <div class="card text-center mb-3 " >
                        <div class="card-header d-flex justify-content-between ">
                            <i>Transaction date:</i>
                                @if ($take->confirm)
                                    <img src="{{ asset('icons/confirm-purchase.svg') }}" width="30px">
                                @else
                                    <div>
                                    Payment !confirmed
                                    </div>
                                @endif
                                <div>{{$take->created_at->diffForHumans()}}</div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                @foreach ($take->cart->items as $item)
                                    <li class="list-group-item d-flex justify-content-between">
                                            <img src="{{$item['item']['image']}}" 
                                                width="40px" height="50px" class="rounded"/>
                                            <span class="badge">{{ number_format($item['price']) }}</span>
                                            {{$item['item']['title']}} || {{$item['qty']}} Units
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                            
                        <div class="card-footer text-muted">
                            <strong class=" d-flex justify-content-between">
                                <i>Total price:</i>
                                    <div>{{ number_format($take->cart->totalPrice)}}</div> 
                            </strong>
                        </div>
                    </div>
                
                @endforeach 

            </ul>
            
        @endforeach
    </div>
</x-master>