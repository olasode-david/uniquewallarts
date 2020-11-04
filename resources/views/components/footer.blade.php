<footer>
    
    <div class="container-fluid" style="background-color:#eee;">
        <div class="container">

        
            <div class="row py-3">

                <div class="col-md-4 mb-3">
                    <img src="{{asset('icons/shopping-bags.svg')}}" class="mb-2" width="50" alt="">
                        <h4 class="font-weight-bold">Same Day Delivery</h4>
                            
                </div>

                <div class="col-md-4 border-left border-right mb-3"> 
                    <img src="{{asset('icons/warranty.svg')}}" class="mb-2" width="50" alt="">
                        <h4 class="font-weight-bold">100% Satifaction Guarantee</h4>
                            
                </div>

                <div class="col-md-4 mb-3">
                    <img src="{{asset('icons/credit-card (1).svg')}}" class="mb-2" width="50" alt="">
                        <h4  class="font-weight-bold">Secured Payment Guaranteed</h4>
                            
                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid" style="background-color:#ccc;">
        <div class="container">
    
            <div class="row  py-3">
        
                <div class="col-md-3 mb-3">
                    
                    
                        <ul class="mt-2 p-1">
                        
                            <li  class="list-unstyled mb-2 d-flex"
                                style="width:50px; "> <img src="{{asset('icons/smartphone.svg')}}" width="25" alt=""> 
                                <span class="ml-1" style="cursor:pointer;"> 08142601713</span>
                            </li>
                            
                            <li class="list-unstyled d-flex mb-2"
                                style="width:50px;"> <img src="{{asset('icons/email.svg')}}" width="23" alt=""> 
                                <span class="ml-1 " style="cursor:pointer;">contact@Uniquewallarts.com</span> 
                            </li>

                            <li class="list-unstyled d-flex mb-2 "
                                style="width:50px;"> <img src="{{asset('icons/globe.svg')}}" width="23" alt=""> 
                                <span class="ml-1" style="cursor:pointer;">www.uniquewallarts.com</span> 
                            </li>

                            <div class="d-flex justify-content">
                                <div class="mr-1">
                                    follow:
                                </div>
                                <li  class="list-unstyled">
                                    <a href="#">
                                        <img src="{{asset('icons/facebook.svg')}}" width="25" alt="">
                                    </a>
                                </li>
                            </div>
                        </ul>
                    
                </div>


                <div class=" col-md-3 mb-3">
                    <h4 class="text-justify">Get in Touch</h4>

                    <ul class="mt-2 p-1">
                        <li class="list-unstyled">
                            <a href="{{route('contact.us')}}" 
                                class="text-decoration-none text-dark">
                                contact us
                            </a>
                        </li>
                        <li class="list-unstyled">
                            <a href="#" 
                            class="text-decoration-none text-dark">
                            F&Q
                            </a>
                        </li>
                        <li class="list-unstyled">
                            <a href="{{route('support.create')}}" 
                            class="text-decoration-none text-dark">
                            Support
                            </a>
                        </li>
                    </ul>

                </div>


                <div class="col-md-3">
                    <h4 >About us</h4>
                    
                        <ul class="mt-2 p-1">
                            <li class="list-unstyled">
                                <a href="{{route('about.us')}}" 
                                class=" text-decoration-none text-dark">
                                About us
                                </a>
                            </li>
                            <li class="list-unstyled">
                                <a href="{{route('about.us')}}/#delivery" 
                                class=" text-decoration-none text-dark">
                                Delivery option
                                </a>
                            </li>
                             <li class="list-unstyled">
                                <a href="{{route('about.us')}}/#howtoshop" 
                                class=" text-decoration-none text-dark">
                                How to shop
                                </a>
                            </li>
                            <li class="list-unstyled">
                                <a href="{{route('blog')}}" 
                                class=" text-decoration-none text-dark">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    
                </div>

                <div class="col-md-3">
                <h4>Subscribe to get latest product</h4>
                    <form action="{{route('sub')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="email">
                                    Email address
                                </label>
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" 
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <p  class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                    @if (session('error'))
                                         <p  class="invalid-feedback" role="alert">
                                          <strong>{{ session('error') }}</strong>
                                        </p>
                                    @endif
                            </div>

                            <button type="submit" class="btn btn-info">
                                Submit
                            </button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
    
        <div class="bg-dark text-white p-2">
            <p class="text-center text-small text-justify">
                &copy; Uniquewallarts {{date('Y')}}. All rights reserved.
            </p>
        </div>
   
    
</footer>