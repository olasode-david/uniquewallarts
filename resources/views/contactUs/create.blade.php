<x-master>
    <div class="container">

        <div class="row p-3">

            <div class="col-md-4">
                
                <ul>
                    <li class="list-unstyled">
                        <img src="{{asset('icons/address.svg')}}" width="20" alt=""> <i>Address :</i> <br>
                        <p class="text-justify text-secondary mt-2">12, iwuchuku street area one estate adura</p>
                    </li>

                    <li class="list-unstyled">
                        <img src="{{asset('icons/phone.svg')}}" width="20" alt=""> <i>phone :</i> <br>
                        <p class="text-justify text-secondary mt-2">08142601713</p>
                    </li>
                    
                    <li class="list-unstyled">
                        <img src="{{asset('icons/email.svg')}}" width="20" alt=""> <i>email :</i> <br>
                        <p class="text-justify text-secondary mt-2">contact@uniquewallarts.com</p>
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

            <div class="col-md-8">
                <form action="{{route('contact.us')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" 
                               class="form-control @error('name') is-invalid @enderror"
                               required value="{{old('name')}}">

                           @error('name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" 
                               class="form-control @error('email') is-invalid @enderror"
                               required value="{{old('email')}}">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">subject</label>
                        <input type="text" name="subject" id="subject" 
                               class="form-control @error('subject') is-invalid @enderror"
                               required value="{{old('subject')}}">

                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">message</label>
                        <textarea name="message" id="message" rows="5"
                        class="form-control @error('message') is-invalid @enderror"
                        required >{{old('message')}}</textarea>

                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-info">Submit</button>

                </form>
            </div>
        </div>

    </div>
</x-master>