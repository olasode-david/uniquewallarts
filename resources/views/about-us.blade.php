<x-master>

    <div class="container">

        <div class="mb-3">
           <h5 class="text-center">
                <a href="{{route('welcome')}}" class="text-decoration-none text-dark" title="HOME">
                    Home
                </a> 
                /
                <i class="text-primary" title="About_us">
                    About us
                </i> 
           </h5>           
        </div>
        <!-- about us -->
        <div class="row mb-3">

            <div class="col-md-4">
                <div class="card">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            
                                <div class="carousel-item active">
                                    <img class="d-block w-100"  src="{{asset('wallpaper/IMG-20200509-WA0012.jpg')}}"
                                    alt="First slide" class="card-img-top">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('wallpaper/IMG-20200509-WA0015.jpg')}}"
                                    alt="Second slide" class="card-img-top">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('wallpaper/IMG-20200509-WA0016.jpg')}}"
                                    alt="Third slide" class="card-img-top">
                                </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="col-md-8 mt-3">
                <div>
                     <h3>Our Goal</h3>
                        <P class=" text-justify">
                            To be very efficient at selling through understanding complex consumer behaviour to maximise conversion rates and up-sell and cross-sell products and services to maximise value over the lifetime of the customer
                        </P>
                </div>

                <div>
                    <h3>Our Vision</h3>
                        <P class=" text-justify"> 
                        To be earth's most customer centric company to build a place where people can come to find and discover anything they might want to buy online.
                        </P>
               </div>

            </div>

        </div>
        <!-- delivery option -->
            <div>

                <h3 class="text-center" id="delivery" style="text-decoration:underline">Delivery Option </h3>

                <p class=" text-justify">
                    We are working on making things way more easy and faster with delivery to your doorsteps. which there will be an additional fees for your items to be deliveried to you immediately. We wiil like you to know that you're only charge once, even if you other for more than one canvas wall arts.
                </p>

                <table class="table">

                    <thead>
                        <tr>
                            <td class="border-right">Location</td>
                            <td>Price</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="border-right">Lagos state</td>
                            <td>&#x20a6; 1,500</td>
                        </tr>
                        <tr>
                            <td class="border-right">Ogun/Ibadan/osun/ondo state</td>
                            <td>&#x20a6; 2,000</td>
                        </tr>
                        <tr>
                            <td class="border-right">Other states</td>
                            <td>&#x20a6; 3,000</td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div>
                <h3 class="text-center" id="howtoshop" style="text-decoration:underline">
                    How to shop
                </h3>

                <p class=" text-justify">
                    We are working on making things way more easy and faster with delivery to your doorsteps. which there will be an additional fees for your items to be deliveried to you immediately. We wiil like you to know that you're only charge once, even if you other for more than one canvas wall arts.
                </p>
            </div>
    </div>

</x-master>