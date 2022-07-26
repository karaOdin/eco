<?php

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
use App\Product;
Route::get('/', function () {
	$products = DB::table('products')->skip(1)->take(3)->get();
    return view('welcome', compact('products'));
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::post('/contactus' ,function(Request $request){
    
    $to = "ecochaudiere@yahoo.fr";
    $subject = "My ";
    $txt = $request->input('mes');
    $headers = "From:". $request->input('email') . "\r\n" .
    "CC: somebodyelse@example.com";
    
    mail($to,$subject,$txt,$headers);
    
    return view('contact');
    return redirect()->back();

});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/products','ProductController@index');
Route::get('/products/{slug}','ProductController@getOnePrd');

