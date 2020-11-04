<div class="mt-3 cart___real" 
             id="loaded"> 
             <i class="p-1">
                {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}
             </i>
 </div>

