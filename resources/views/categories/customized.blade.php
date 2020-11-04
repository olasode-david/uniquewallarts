<x-master>

    <div class="container">

        <div class="mb-3 ">
           <h5 class="text-center">
                <a href="{{route('welcome')}}" class="text-decoration-none text-dark" title="Home">
                    Home
                </a> 
                /
                <i class="text-primary" title="Customized">
                    Customized
                </i> 
           </h5>           
        </div>
             <!-- carts views for order -->
        <div class="row">
            @foreach($items as $item)
                  <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card">
                            <div class="position-relative">
                                <a href="{{route('item.show',$item->id)}}">
                                    <img src="{{$item->image}}" style="height:220px;" 
                                        class="card-img-top" alt="">
                                </a>
                                @can('customized', $item)
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
            @endforeach
        </div>
    <!-- end of carts view -->
    </div>
</x-master>