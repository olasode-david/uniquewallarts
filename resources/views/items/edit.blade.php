<x-master>
   <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Edit the selected  Post') }}

                        <p class="text-danger text-cneter">YOU CAN EDIT A SINGLE INPUT AND CLICK ON THE UPDATE BUTTON</p>
                    </div>

                <div class="card-body">
                    <form method="POST" action="{{route('item.update',$item->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    
                        <div class="form-group row">
                            <label for="title" 
                            class="col-md-4 col-form-label text-md-right">
                            Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                name="title" value="{{ $item->title }}" 
                                 autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" 
                            class="col-md-4 col-form-label text-md-right">
                            {{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file"
                                 class="form-control-file @error('image') is-invalid @enderror" 
                                 name="image" value="{{ $item->image }}" 
                                  autocomplete="image" autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <p class="text-center text-small text-secondary">
                            Current type:: {{$item->type}}
                        </p>
                        <div class="form-group row">
                            <label for="type" 
                            class="col-md-4 col-form-label text-md-right">
                            type</label><br>
                                
                            <div class="col-md-6">                         
                                    
                                            <input type="checkbox" name="type" id="type"
                                            class="form-check-input" value="customized">
                                            <label for="customized" class="mr-4">Customized</label>                                   
                                    
                                            <input type="checkbox" name="type" id="type"
                                            class="form-check-input" value="animated">
                                            <label for="animated">Animated</label>                                                        
                            </div>
                            @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div> 


                        <div class="form-group row">
                            <label for="prices"
                             class="col-md-4 col-form-label text-md-right">
                             Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text"
                                 class="form-control @error('price') is-invalid @enderror" 
                                 name="price" value="{{ $item->price }}"
                                   >

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            

                        <div class="form-group row">
                            <label for="body" 
                            class="col-md-4 col-form-label text-md-right">
                            Body-content</label>

                            <div class="col-md-6">
                                <textarea name="body" id="body"
                                 class="form-control @error('body') is-invalid @enderror"
                                    
                                 >{{$item->body}}</textarea>
                    
                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <p class="text-center text-secondary text-small">
                            Current Status:: {{$item->status}}
                        </p>
                        <div class="form-group row">
                            <label for="status" 
                            class="col-md-4 col-form-label text-md-right">
                            status</label>
                            
                            <div class="col-md-6">
                               
                                    
                                         <input type="checkbox" name="status" id="status"
                                            class="form-check-input" value="available">
                                            <label for="available" class="mr-4">available</label>
                                                                
                                        <input type="checkbox" name="status" id="status"
                                            class="form-check-input" value="not available">
                                            <label for="not available">not available</label>                              
                            </div>
                            @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="size" 
                            class="col-md-4 col-form-label text-md-right">
                            Size</label>

                            <div class="col-md-6">
                            <input id="size" type="text"
                                 class="form-control @error('size') is-invalid @enderror" 
                                 name="size" value="{{ $item->size }}" 
                                  autocomplete="size" autofocus>
                    
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="turn" 
                            class="col-md-4 col-form-label text-md-right">
                            turn</label><br>
                                
                            <div class="col-md-6">                                                      
                                    
                                            <input type="checkbox" name="turn" id="turn"
                                            class="form-check-input" value="disabled">
                                            <label for="disabled">Disabled</label>                                                        
                            </div>
                            @error('turn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div> 


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                 </div>
                </div>
            </div>
        </div>
    </div>
</x-master>