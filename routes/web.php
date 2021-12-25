<?php

use App\Http\Controllers\LoginController;
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
Route::get('/login', 'LoginController@showLoginForm')->name('login.view');
Route::post('/login-attempt', 'loginController@authenticate')->name('authenticate');

Route::get('/', 'ProductController@index')->name('home');
Route::get('/details/{id}', 'ProductController@details')->name('product.details');
Route::get('/add-to-cart/{id}', 'ProductController@addCart')->name('product.addCart');
Route::get('/cart-items', 'ProductController@cartItem')->name('cart.items');


Route::group(['middleware' => ['user']], function () {
    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::post('/checkout', 'OrderController@store')->name('checkout');
});

