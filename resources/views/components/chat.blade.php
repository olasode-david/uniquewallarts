<button class="open-button rounded-circle" onclick="openForm()"><i style="font-size:24px" class="fa">&#xf086;</i></button>

<div class="chat-popup" id="myForm">
  <form action="{{route('message')}}" method="POST" class="form-container">
        @csrf

        <div class="d-flex justify-content-between">
            <h3 class="text-center text-justify text-small">Leave a message</h3> 
            <button type="button" class="border-0 bg-white" onclick="closeForm()">
            <i class="fa">&#xf00d;</i></button>
        </div>
        <p class="text-center text-justify text-small">
            Please leave a message and we'll get back to you as soon as possible.
        </p>
    
        <label for="guest"><b>Guest</b></label>
        <input type="text" name="guest" 
        value="Guest" id="guest"
        class="@error('guest') is-invalid @enderror">
        @error('guest')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
        @enderror

     <label for="email"><b>Email</b></label>
        <input type="email" name="email" 
        placeholder="Email.." value="{{old('email')}}" 
        class=" @error('email') is-invalid @enderror"
        required id="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    <label for="msg"><b>Message</b></label>
    <textarea  placeholder="Type message.." required
    name="message" value="{{old('message')}}" 
    class=" @error('message') is-invalid @enderror"
    ></textarea>
    @error('message')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
   
    <button type="submit" class="btn">Submit</button>
  </form>
 
</div>