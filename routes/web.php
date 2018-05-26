<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();

Route::get('/', 'PageController@snacks');
Route::get('/home', 'PageController@snacks');
Route::get('/menu','PageController@snacks');
Route::get('/snacks', 'PageController@snacks');
Route::get('/pizza', 'PageController@pizza');
Route::get('/chinese', 'PageController@chinese');
Route::post('/cart-add','CartController@cart_add');
Route::get('/cart-update/{id}/{qty}','CartController@cart_update');
Route::post('/cart-updater','CartController@cartUpdate');
Route::get('/abc','PageController@abc');
Route::get('/wrongpwd','PageController@wrongpwd');
Route::get('/myorder','PageController@myorder');
Route::get('/play','PageController@game');

Route::get('/order','OrderController@order');
Route::get('/check/{pwd?}','OrderController@check');
Route::get('/check-code','OrderController@check_code');
Route::get('/end-session','OrderController@endsession');
//Route::get('/logout', function () {
//	Auth::logout();
  //  return view('home');
//});
Route::get('/generate-code',function(){
		App\Code::getQuery()->delete();
       // DB::table('codes')->truncate();
        Artisan::call('db:seed');
        return redirect()->to('/view-code');
})->middleware('AuthCheck');
Route::get('/view-code','PageController@showcode')->middleware('AuthCheck');
Route::get('/admin','PageController@admin');
Route::get('/base','PageController@base')->middleware('AuthCheck');
Route::get('/bill','PageController@bill')->middleware('AuthCheck');

Route::get('/generate-bill/{code}','OrderController@generate_bill')->middleware('AuthCheck');
Route::get('/view-orders','OrderController@view_orders')->middleware('AuthCheck');
Route::get('/today-analysis','OrderController@today_analysis')->middleware('AuthCheck');
Route::get('/weekly-analysis','OrderController@weekly_analysis')->middleware('AuthCheck');
Route::get('/monthly-analysis','OrderController@monthly_analysis')->middleware('AuthCheck');
Route::get('/total-analysis','OrderController@total_analysis')->middleware('AuthCheck');
Route::get('/export','OrderController@export')->middleware('AuthCheck');

Route::get('/insert','ItemsController@insertform')->middleware('AuthCheck');
Route::post('/create','ItemsController@insert')->middleware('AuthCheck');

Route::get('/view-items','ItemsController@index')->middleware('AuthCheck');
Route::get('/edit-items','ItemsController@editform')->middleware('AuthCheck'); 
Route::get('/edit/{id}','ItemsController@newval')->middleware('AuthCheck'); 
Route::post('/edit/{id}','ItemsController@edit')->middleware('AuthCheck'); 

Route::get('/delete-items','ItemsController@deleteform')->middleware('AuthCheck'); 
Route::get('/delete/{id}','ItemsController@destroy')->middleware('AuthCheck');

//Route::get('/home', 'HomeController@index');
//Route::get('/practice','PageController@menu2');