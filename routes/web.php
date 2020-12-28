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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'cartController@index')->name('cart');
Route::get('/success', 'cartController@success')->name('success');

// get link register/success, direct ke folder auth registercontroller dan method success
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/products', 'DashboardProductController@index')
    ->name('dashboard-product');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')
    ->name('dashboard-product-details');

Auth::routes();
