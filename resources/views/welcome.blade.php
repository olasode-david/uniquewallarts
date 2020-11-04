<x-app>
    <div>
        <!-- product list -->
            <!-- swiper slider -->
            <div class="swiper-container">
                <div class="swiper-wrapper mb-5">
                    @foreach($moves as $move)
                        <div class="swiper-slide">
                            <!-- card 1-->
                            <div class="card">
                                   
                                    <div class="position-relative">
                                        <a href="{{route('item.show',$move->id)}}">
                                            <img src="{{$move->image}}" style="height:220px;" 
                                                class="card-img-top" alt="">
                                        </a>
                                        @can('moves', $move)
                                            
                                            <form action="{{route('item.delete',$move->id)}}" method="POST" 
                                                style="position:absolute; top:10px; right:10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-light">
                                                    <i class="font-weight-bolder">&times;</i>
                                                </button>
                                            </form>
                                            <a href="{{ route('item.edit',$move->id) }}"
                                            style="position:absolute; top:10px; left:10px;"
                                            class="text-dark">
                                                Edit
                                            </a>   
                                        @endcan                               
                                    </div>



                                    <div class="card-body" style="background-color:#eee">
                                        <h4 class="text-center" style="font-size:15px">{{$move->title}}</h4> 
                                        <p class="text-center">
                                            <img src="https://img.icons8.com/color/48/000000/verified-badge.png" width="20px"/> {{$move->status}}
                                        </p>
                                        <p class="text-center text-small text-secondary -mt-1" style="margin-top:-10px;">
                                        &#x20a6;{{ number_format($move->price)}}
                                        </p>
                                        <div class="position-relative">
                                           <center>
                                                <a href="{{route('item.add', $move->id)}}" class="btn btn-info set" data-id="{{$move->id}}">
                                                        Add to cart
                                                </a>
                                            </center>
                                            <div style="position:absolute; bottom:54px; right:calc(50% - 35px);">
                                                @if (Session::has('cart'))
                                                    @foreach ($locates as $locate)
                                                        
                                                            @if ($move->id === $locate['item']['id'])
                                                                <i class="text-secondary mt-1">
                                                                    Added({{$locate['qty']}})
                                                                </i>
                                                            @endif
                                                        
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                            
                                    </div>
                            </div><!-- end of card1 -->
                        </div>
                    @endforeach

                  

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
      <!-- end of product list -->
              <!-- noticify option delivery, payment, call -->
            <div class="row border-top border-bottom mb-3">

                <div class="col-md-4 p-3" id="icons">
                    <center>
                        <img src="{{asset('icons/shipped.svg')}}"
                             width="40" alt="">
                        <h5 class=" font-weight-bolder">
                             Delivery to Your Doorstep
                        </h5>
                    </center>
                </div>

                <div class="col-md-4 border-left border-right p-3" id="icon">
                    <center>
                        <img src="{{asset('icons/credit-card.svg')}}"
                             width="40" alt="">
                        <h5  class=" font-weight-bolder">
                            Payment on Delivery
                        </h5>
                        <p style="margin-top:-10px;">
                            Available Only in Lagos
                        </p>
                    </center>
                </div>

                <div class="col-md-4 p-3 position-relative">
                    <center>
                        <img src="{{asset('icons/phone.svg')}}" 
                            width="35" class="mb-1" alt="">
                        <h5  class=" font-weight-bolder">
                            Get in Touch
                        </h5>
                        <p style="margin-top:-10px;">
                            Call us on +234 7050764535 / mon-sat 8am-5am
                        </p>
                        <img src="{{asset('icons/down-arrow.svg')}}" width="25"
                             style="position:absolute; top:0; right:10px" 
                             onclick="iconShow()" id="press" alt="">
                    </center>
                </div>

            </div>
            <!-- tags end -->

      <!-- carts views for order -->
        <div class="row load">
            @foreach($items as $item)
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                            <div class="position-relative">
                                <a href="{{route('item.show',$item->id)}}">
                                    <img src="{{$item->image}}" style="height:220px;" 
                                        class="card-img-top" alt="">
                                </a>
                                @can('items', $item)
                                    
                                    <form action="{{route('item.delete',$item->id)}}" method="POST" 
                                        style="position:absolute; top:10px; right:10px;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-light">
                                            <i class="font-weight-bolder">&times;</i>
                                        </button>
                                    </form>
                                    <a href="{{ route('item.edit',$item->id) }}"
                                    style="position:absolute; top:10px; left:10px;"
                                    class="text-dark">
                                        Edit
                                    </a>
                                @endcan
                                
                            </div>
                                <div class="card-body" style="background-color:#eee">
                                        
                                        <h4 class="text-center" style="font-size:15px">{{$item->title}}</h4> 
                                                <p class="text-center">
                                                    <img src="https://img.icons8.com/color/48/000000/verified-badge.png" 
                                                        width="20px"/>{{$item->status}}
                                                </p>
                                                <p class="text-center text-small text-secondary -mt-1"
                                                     style="margin-top:-8px;">
                                                     &#x20a6;{{ number_format($item->price)}}
                                                </p>

                                            <div>
                                                <center>
                                                        <a href="{{route('item.add', $item->id)}}" class="btn btn-info set" data-id="{{$item->id}}">
                                                                Add to cart
                                                        </a>
                                                </center>
                                                <div style="position:absolute; bottom:54px; right:calc(50% - 35px);">
                                                    @if (Session::has('cart'))
                                                        @foreach ($locates as $locate)
                                                            
                                                                @if ($item->id === $locate['item']['id'])
                                                                    <i class="text-secondary mt-1">
                                                                        Added({{$locate['qty']}})
                                                                    </i>
                                                                @endif
                                                            
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                                  
                                        </div>
                                
                    </div>
                </div>
            @endforeach
        </div>
    <!-- end of carts view -->
    </div>


   
</x-app>
