<div class="container-fliud   d-flex justify-content-between  shadow-lg  " style="color:#eee">
                <a class="navbar-brand p-3 move-left"
                     href="{{ url('/') }}">
                        {{ config('app.name', 'Uniquewallarts') }}
                </a>
                <a href="{{route('item.index')}}" class="text-decoration-none">
                    <div class="p-1 move-right position-relative">
                        <div  class=" mb-2 d-flex  ">
                        
                            <img src="icons/buy.png" 
                                 class="p-3" 
                                 height="70px" 
                                 alt=""> 
                            
                            <div id="cart">
                                
                            </div>
                        </div>
                    </div>
                </a>
</div>

