<x-extra>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Billing details
                    <a href="{{route('welcome')}}" class="float-right">Skip</a>
                    <p class="text-danger text-center">
                        Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy
                    </p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('billing.details') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="company" 
                            class="col-md-4 col-form-label text-md-right">
                            Company name (optional)</label>

                            <div class="col-md-6">
                                <input id="conpany" type="text" 
                                class="form-control @error('company') is-invalid @enderror" 
                                name="company" value="{{ old('company') }}" 
                                required autofocus>

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="street"
                             class="col-md-4 col-form-label text-md-right">
                             {{ __('Street address *') }}</label>

                            <div class="col-md-6">
                                <input id="street" type="text" name="street"
                                 class="form-control mb-2 @error('street') is-invalid @enderror text-secondary text-small" 
                                  value="{{ old('street') }}" placeholder="House number and street name"
                                  required>
                               
                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                  <input id="apartment" type="text"
                                 class="form-control @error('apartment') is-invalid @enderror" 
                                 name="apartment" value="{{ old('apartment') }}" 
                                 placeholder="Apartment, suit, unit, etc. (optional)">

                                 @error('apartment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="town"
                             class="col-md-4 col-form-label text-md-right">
                             {{ __('Town/City *') }}</label>

                            <div class="col-md-6">
                                <input id="town" type="text"
                                 class="form-control @error('town') is-invalid @enderror" 
                                 name="town" value="{{ old('town') }}"
                                  required>

                                @error('town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state"
                             class="col-md-4 col-form-label text-md-right">
                             {{ __('State *') }}</label>

                            <div class="col-md-6">

                               <select name="state" class="custom-select @error('state') is-invalid @enderror" required>
                              
                                    <option selected>Select an option...</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Abuja">Abuja</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe"> Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                    <option value=""></option>
                                </select>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            

                        <div class="form-group row">
                            <label for="postcode" 
                            class="col-md-4 col-form-label text-md-right">
                            {{ __('Postcode (optional)') }}</label>

                            <div class="col-md-6">
                                <input id="postcode" type="text" 
                                class="form-control @error('postcode') is-invalid @enderror" 
                                name="postcode">


                                @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" 
                            class="col-md-4 col-form-label text-md-right">
                            {{ __('Phone *') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" 
                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                 required>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="order_note" 
                            class="col-md-4 col-form-label text-md-right">
                            Order notes (optional)</label>

                            <div class="col-md-6">

                                <textarea name="order_note" id="order_note" rows="3"cols="5"
                                    class="form-control @error('order_note') is-invalid @enderror"
                                    placeholder="Notes about your order, e.g. special notes for delivery"> 
                                </textarea>

                                @error('order_note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-extra>
