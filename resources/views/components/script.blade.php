<script>
 

  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 20,
      autoplay:true,
      autoplaySpeed:1000,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
      },
      breakpoints: {
        375:{
          slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      }
    });


    
$(document).ready(function(){

  $('.toast').toast('show');
//add to cart js code
    $("body").on("click",".set",function(e){

    e.preventDefault();
    var id = $(this).data("id");
    // var id = $(this).attr('data-id');
    var token = $("meta[name='csrf-token']").attr("content");
    var url = e.target;

    $.ajax(
        {
          url: url.href, //or you can use url: "company/"+id,
          type: 'GET',
          data: {
            _token: token,
                id: id
        },
        success: function (response){
          var auto_refresh = setInterval(() => {
              $("#cart").load("{{url('number')}}");
          var clear  = clearInterval(auto_refresh);
              }, 500);
          $("#success").html(response.message);
        }
        
     });
      return false;
   });
    //refresher js code

    var auto_refresh = setInterval(() => {
              $("#cart").load("{{url('number')}}");
        var clear  = clearInterval(auto_refresh);
              }, 500);

    
    
    
  // delete in the cart
  $("body").on("click",".cart",function(e){
      e.preventDefault();
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    var url = e.target;

    $.ajax(
        {
          url: url.href, //or you can use url: "company/"+id,
          type: 'GET',
          data: {
            _token: token,
                id: id
        },
        success: function (response){

          var indexload = setInterval(() => {
              $("#indexload").load("{{url('indexload')}}");
              var clearload = clearInterval(indexload);
              }, 500);
          
              var auto_refresh = setInterval(() => {
              $("#cart").load("{{url('number')}}");
          var clear  = clearInterval(auto_refresh);
              }, 500);
            $("#success").html(response.message);

             
        }
     });
      return false;
   });
    
  // the refresher
   var indexload = setInterval(() => {
              $("#indexload").load("{{url('indexload')}}");
              var clearload = clearInterval(indexload);
              }, 500);

      //first display
      $("#hide1").hide();
      $("#show1").click(function(){
           $("#hide1").show();
            $("#show1").hide();
      });

      //second display
       $("#hide2").hide();
      $("#show2").click(function(){
           $("#hide2").show();
            $("#show2").hide();
      });
  
});
     
    

      

    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
   

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

    function iconShow() {
      document.getElementById("icons").style.display = "block";
      document.getElementById("icon").style.display = "block";
      document.getElementById("press").style.display = "none";
    }
</script>
