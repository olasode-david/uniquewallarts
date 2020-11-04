<x-app>
    <div>
        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <img src="{{$item->image}}" class="card-img-top" height="500px" alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-body">
                    <p class="text-center text-justify font-weight-bold">{{$item->body}}</p>

                    <h4 class="text-center text-small">{{$item->title}}</h4> 
                    <p class="text-center">
                        <img src="https://img.icons8.com/color/48/000000/verified-badge.png" width="20px"/>{{$item->status}}
                    </p>
                    <p class="text-center text-small text-secondary -mt-1" style="margin-top:-10px;">
                    &#x20a6;{{$item->price}}
                    </p>
                    
                        <div class="position-relative">
                            <center>
                                <a href="{{route('item.add', $item->id)}}" class="btn btn-info set"
                                 data-id="{{$item->id}}">
                                      Add to cart
                                </a>
                            </center>
                            <div style="position:absolute; bottom:35px; right:75px;">
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
    </div>
</x-app>