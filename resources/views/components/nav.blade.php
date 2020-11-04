<div>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            
            <ul class="navbar-nav ">

                <li class="nav-item {{Request::path() === 'about-us' ? 'bg-primary' : ''}}">
                    <a class="nav-link" href="{{route('about.us')}}">About us</a>
                </li>  

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{Request::path() === 'customized' ? 'bg-primary' : ''}}
                    {{Request::path() === 'animated' ? 'bg-primary' : ''}}"
                     href="#" id="navbardrop" data-toggle="dropdown">
                        Categories
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('customized')}}">Customized</a>
                    <a class="dropdown-item" href="{{route('animated')}}">Animated</a>
                    </div>
                </li>

                <li class="nav-item {{Request::path() === 'blog' ? 'bg-primary' : ''}}">
                    <a class="nav-link" href="{{route('blog')}}">
                         Blog
                    </a>
                </li> 

                <li class="nav-item">
                    <a class="nav-link" href="{{route('account')}}" >
                        My account
                    </a>
                    
                </li>

                @can('update')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{Request::path() === 'allaccount' ? 'bg-primary' : ''}}
                        {{Request::path() === 'items/create' ? 'bg-primary' : ''}}"
                        href="#" id="navbardrop" data-toggle="dropdown">
                           Admin 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('create')}}">
                                upload New Product
                            </a>
                            <a class="dropdown-item" href="{{route('allaccount')}}">
                                All Acccount view and orders
                            </a>
                            <a class="dropdown-item" href="{{route('subscribeEmail')}}">
                                List of subscribe email
                            </a>
                        </div>
                    </li>

                   
                @endcan
                

                 
        

            </ul>
        </div>  
    </nav>
    
</div>