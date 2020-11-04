<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     @if (Request::path() === '/')
         <title>{{ config('app.name', 'Uniquewallarts') }} - Canvas wall arts | sales | Nationwide delivery.....</title> 
         <meta name="keywords" content="Uniquewallarts, Canvas wall arts, Customized canvas wall arts, Animated canvas wall arts in Nigeria">
         <meta name="description" content="Uniquewallarts, Canvas wall arts, Customized canvas wall arts, Animated canvas wall arts are suitable for any vacant space on your wall e.g Dinning, sitting room, club, office e.t.c. Already framed comes with nails, 100% high quality and durable, get what you order, Nationwide delivery available">
         <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif

    @if (Request::path() === 'about-us')
         <title>About us - Uniquewallarts Canvas wall arts | sales | Nationwide delivery.....</title> 
         <meta name="keywords" content="About-us, Uniquewallarts, Canvas wall arts,  Delivery option, How to shop in Nigeria">
         <meta name="description" content="About uniquewallarts , delevery option and how to shop in nigeria at uniquewallarts.com. We are currently one of the most reliable and dependable in Canvas wall arts, uniquewallarts in Nigeria">
         <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif

    @if (Request::path() === 'customized')
        <title>Customized - Uniquewallarts Canvas wall arts | sales | Nationwide delivery.....</title> 
        <meta name="keywords" content="Customized canvas wall arts, Uniquewallarts, Canvas wall arts,   in Nigeria">
        <meta name="description" content="Customized canvas wall arts, uniquewallarts in nigeria at uniquewallarts.com. We are currently one of the most reliable and dependable in customized Canvas wall arts, uniquewallarts in Nigeria">
        <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif

    @if (Request::path() === 'animated')
        <title>Animated - Uniquewallarts Canvas wall arts | sales | Nationwide delivery.....</title> 
        <meta name="keywords" content="Animated canvas wall arts, Uniquewallarts, Canvas wall arts,   in Nigeria">
        <meta name="description" content="Animated canvas wall arts, uniquewallarts in nigeria at uniquewallarts.com. We are currently one of the most reliable and dependable in animated Canvas wall arts, uniquewallarts in Nigeria">
        <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif

    @if (Request::path() === 'blog')
        <title>Blog - Uniquewallarts Canvas wall arts | sales | Nationwide delivery.....</title> 
        <meta name="keywords" content="Blog on canvas wall arts, Uniquewallarts, Canvas wall arts   in Nigeria">
        <meta name="description" content="Blog canvas wall arts, uniquewallarts in nigeria at uniquewallarts.com. We are currently one of the most reliable and dependable in all Canvas wall arts, uniquewallarts in Nigeria">
        <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif

    @if (Request::path() === 'account')
        <title>Account - Uniquewallarts Canvas wall arts | sales | Nationwide delivery.....</title> 
        <meta name="keywords" content="Account canvas wall arts, Uniquewallarts, Canvas wall arts in Nigeria">
        <meta name="description" content="Account save all your transaction with us. Canvas wall arts, uniquewallarts in nigeria at uniquewallarts.com . We are currently one of the most reliable and dependable in all Canvas wall arts, uniquewallarts in Nigeria">
        <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif

    @if (Request::path() === 'cart')
        <title>Cart - Uniquewallarts Canvas wall arts | sales | Nationwide delivery.....</title> 
        <meta name="keywords" content="Account canvas wall arts, Uniquewallarts, Canvas wall arts in Nigeria">
        <meta name="description" content="Shopping Cart show what you have selected from the cart. Canvas wall arts, uniquewallarts in nigeria at uniquewallarts.com . We are currently one of the most reliable and dependable in all Canvas wall arts, uniquewallarts in Nigeria">
        <meta name="author" content="David the web designer and developer contact for yours: +971 0558551639, +234 07050764535. Numbers on whatsapp too">
    @endif
    
    
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" deffer></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{asset('js/unique.js')}}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles --> 
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/unique.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
  
    <!-- style for the carts and message fixed positions -->
    <x-style></x-style>
    
</head>
<body>
    <div id="app">
    <!-- popup for message -->
            @if(session('message'))
                <div class="toast position-absolute top-0" data-autohide="false" 
                    style="left:calc(50% - 75px); z-index:99; width:100%;">
                        <div class="toast-body  
                          bg-success text-white d-flex justify-content-between">
                            <div>
                                <strong>{{session('message')}}</strong>
                            </div>
                            <button type="button" class="ml-2 mb-1 close"
                                 data-dismiss="toast">&times;</button>
                        </div>
                </div>
           @endif
    <!-- end -->


        <!-- the header view -->
            <div class="container-fliud shadow-sm  d-flex bg-dark align-items-baseline justify-content-between p-1">
                    <div class="move-left">
                        <h6 class=" text-light mt-2" style="font-size: 13px">Delivery Nationwide</h6>
                    </div>
                        @guest
                            <div class=" d-flex justify-content-center move-right ">
                                <div>
                                    <a href="{{route('register')}}" 
                                        class="mr-3 text-white text-decoration-none">
                                        <i class="fa">&#xf023;</i> Sign up
                                    </a>
                                </div>
                                @if (Route::has('register'))
                                     <div>
                                    <a href="{{route('login')}}" 
                                        class="text-white text-decoration-none">
                                        <i class="fa">&#xf2be;</i> Sign in
                                    </a>
                                </div>
                                @endif                               
                            </div>
                        
                           @else

                           <div class="nav-item dropdown move-right">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <img src="{{asset('icons/user.svg')}}" width="20px" alt> 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                           
                    

            </div>   
        <!-- end of the header view -->
        <!-- name logo and carts -->
            <x-header></x-header>
        <!-- drop content navigation -->
             <x-nav></x-nav>

        <!-- the body content components -->
            <main class="py-4">
                {{$slot}}           
            </main>

        <!-- footer content -->
        <x-footer></x-footer> 

    </div>

<!-- the float message bar -->
    <x-chat></x-chat>
    <x-script></x-script>
</body>

</html>
