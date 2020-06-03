<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});


Route::get('/ad/{addres}' , function ($addres){
    return view($addres);
});


Route::resource('/user' ,'userController');
Route::POST('/user/photo' ,'userController@photo')->name('user.photo');
Route::get('/message/read/{user}' ,'MessageController@readMessage')->name('message.read');
Route::resource('/messages' ,'MessageController');
Route::resource('/contact' ,'ContactController');
Route::resource('/post' ,'PostController');
Route::get('/cart/{post}' ,'cartController@addToCart')->name('cart.add');
Route::get('/cart/{cartId}/delete' ,'cartController@deleteFromCart')->name('cart.delete');
Route::get('/cart/{cartId}/forget' ,'cartController@forgetFromCart')->name('cart.forget');
Route::POST('/cart/{cartId}/number' ,'cartController@numberFromCart')->name('cart.number');
Route::get('/cart' ,'cartController@index')->name('cart.index');
//->middleware('checkadmin');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
