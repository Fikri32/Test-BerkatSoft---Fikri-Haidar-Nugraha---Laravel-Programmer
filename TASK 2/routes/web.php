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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'produk'], function () {
  Route::get('','ProdukController@index')->name('produk.index');
  Route::match(['get','post'],'tambah','ProdukController@store')->name('produk.tambah');

  Route::match(['get','put'],'update/{id}','ProdukController@update')->name('produk.update');

  Route::get('delete/{id}','ProdukController@destroy')->name('produk.delete');
});

Route::group(['prefix' => 'customer'], function () {
  Route::get('','CustomerController@index')->name('customer.index');
  Route::match(['get','post'],'tambah','CustomerController@store')->name('customer.tambah');

  Route::match(['get','put'],'update/{id}','CustomerController@update')->name('customer.update');

  Route::get('delete/{id}','CustomerController@destroy')->name('customer.delete');
});

Route::group(['prefix' => 'order'], function () {
  Route::get('','OrderController@index')->name('order.index');
  Route::match(['get','post'],'tambah','OrderController@store')->name('order.tambah');

  Route::match(['get','put'],'update/{id}','OrderController@update')->name('order.update');

  Route::get('delete/{id}','OrderController@destroy')->name('order.delete');
});
