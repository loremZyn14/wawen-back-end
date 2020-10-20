<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Auth Route
 */
Route::post('login', 'AuthController@login');
Route::post('register','AuthController@register');
Route::get('login/{provider}', 'AuthController@redirectToProvider');
Route::get('login/{provider}/callback', 'AuthController@handleProviderCallback');
/**
 * Categories Route
 */
Route::apiResource('categories', 'CategoryController');

/**
 * Products
 */
Route::apiResource('products', 'ProductController')->except('show');

/**
 * Order Route
 */
Route::apiResource('orders', 'OrderController')->except('show');
Route::get('orders/confirmed','OrderController@confirmed');
Route::put('orders/{order}/update-status','OrderController@updateStatus')->name('orders.status');
Route::get('accounts/{account}/orders','OrderController@customer')->name('orders.customer');

/**
 * Account Route
 */
Route::apiResource('accounts','AccountController')->except(['index','show']);
Route::get('accounts/{account}','AccountController@index');

/**
 * Account Carts Route
 */
Route::get('accounts/{account}/carts','CartController@index')->name('carts.index');
Route::post('accounts/{account}/carts','CartController@store')->name('carts.store');
Route::put('accounts/{account}/carts','CartController@update')->name('carts.update');
Route::delete('accounts/{account}/carts/products/{product}','CartController@destroy')->name('carts.destroy');


