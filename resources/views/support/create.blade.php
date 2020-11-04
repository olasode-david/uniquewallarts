<x-master>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center">Have a Question?</h3>
                <form method="POST" action="{{route('support.create')}}">
                    @csrf
                            
                    <!-- name tags-->
                        <div class="form-group">
                            <label  for="question" 
                                class="form-label ">What's your name?
                            </label>
                        
                                    <input id="name" type="text" 
                                    class="form-control @error('name') is-invalid @enderror" 
                                    name="name" value="{{ old('name') }}"
                                    required  autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            
                        </div>
                    <!-- endname div-->

                    <!-- email tags-->
                        <div class="form-group">
                             <label  for="question" 
                                class="form-label ">Which email should we respond to?
                            </label>

                                    <input id="email" type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}"
                                    required autocomplete="email" >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            
                        </div>
                    <!-- endemail div-->

                     <!-- email tags-->
                        <div class="form-group">
                            <label  for="question" 
                                class="form-label ">What's your question?
                            </label>
                            
                            <textarea class="form-control @error('question') is-invalid @enderror" 
                                   name="question" rows="5" required id="comment">{{ old('question') }}
                            </textarea>
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <!-- endemail div-->
                    <button class="btn btn-primary">send</button>
                       
                </form>
            </div>
        </div>
    </div>

</x-master>