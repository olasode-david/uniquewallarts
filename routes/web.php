<?php

use App\Item;
use App\Subscribe;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'ItemController@welcome')->name('welcome');
    

//Auth::routes();
Auth::routes(['verify' => true]);
// items controller for view(get) and store(post)
Route::get('/items/create', 'ItemController@create')->name('create');
Route::get('/cart', 'ItemController@index')->name('item.index');

Route::post('/items', 'ItemController@store')->name('store');
Route::get('/items/{item}/readmore','ItemController@show')->name('item.show');
Route::delete('/deletes/{item}', 'ItemController@destroy')->name('item.delete');
Route::get('/add-to-cart/{id}','ItemController@AddToCart')->name('item.add');
Route::get('/items/{item}/edit','ItemController@edit')->name('item.edit');
Route::put('/item/{update}', 'ItemController@update')->name('item.update');
Route::get('/delete/cartItem/{id}','ItemController@DeleteCartItem')->name('delete.cartItem');
Route::get('addition/cartItem/{id}', 'ItemController@additionItem')->name('addition.cartItem');
Route::get('subtration/cartItem/{id}', 'ItemController@subtrationItem')->name('subtration.cartItem');

//message controller for views(get) and send(post)
Route::get('/message','MessageController@index')->name('message');
Route::post('/message','MessageController@store');

Route::get('/sendMail', 'SubscribeController@sendMail')->name('item.mail');
// cart controller for view(get) and for upload

Route::put('/carts/{cart}', 'CartController@update');

// customized , animated controller to show list(index) of customized canvas wall arts
Route::get('/customized','CategoriesController@customized')->name('customized');
Route::get('/animated','CategoriesController@animated')->name('animated');

//blog post
Route::get('/blog',function(){
    return view('blog');
})->name('blog');
//about us
Route::get('/about-us',function(){
    return view('about-us');
})->name('about.us');
//contact us
Route::get('/contact-us','ContactUsController@create')->name('contact.us');
Route::post('/contact-us','ContactUsController@store');

//for subscribe to see immediate upload
Route::post('/subscribe','SubscribeController@store')->name('sub');
Route::get('/unsubscribe/5gh3448hasgvshdje883838u4heddndjdjeueu48/{delete}','SubscribeController@destroy')->name('unsubscribe');

//payment method url
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('/confirm/payment/022hdhd0200022939djdj/{id}','PaymentController@update')->name('confirm');

//account view 
Route::get('/account','BillingDetailController@index')->name("account");
//full registered details
Route::get('/billing/details', 'BillingDetailController@create')->name('billing.create')->middleware('auth');
Route::post('billing/details','BillingDetailController@store' )->name('billing.details');
Route::get('/billing/details/{detail}/edit', 'BillingDetailController@edit')->name('billing.edit')->middleware('auth');
Route::put('/billing/details/{update}','BillingDetailController@update')->name('billing.update');

//cart view for refresh without reloading the page
Route::view('number', 'reload.cart');
Route::get('indexload', 'ItemController@indexload');

// Admin view and controllers
Route::get('/allaccount','AdminController@allaccount')->name('allaccount');
Route::get('/subscribeEmail','AdminController@subscribeEmail')->name('subscribeEmail');

//support links 
Route::get('/support','SupportController@create')->name('support.create');
Route::post('/support','SupportController@store');

//this is a test $client  = @$_SERVER['HTTP_CLIENT_IP'];
   
Route::get('/test', function(){
    $ip = var_dump(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['country'] = $ip_data->geoplugin_countryCode;
        $result['city'] = $ip_data->geoplugin_city;
    }
    return $result;
});
Route::get('/uptake', function(){
    return view('test2');
});

