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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');


// asuransi
Route::get('/asuransi', 'AsuransiController@index')->name('index');
Route::get('/asuransi/create-new', 'AsuransiController@create_page')->name('create');
Route::post('/asuransi/create-new', 'AsuransiController@save_page')->name('create');
Route::get('/asuransi/update/{asuransi}', 'AsuransiController@update_page')->name('update');
Route::post('/asuransi/update/{asuransi}', 'AsuransiController@update_save')->name('update');
Route::delete('/asuransi/update/{asuransi}', 'AsuransiController@delete')->name('delete');

// kantorcabangs
Route::get('/kantor', 'KantorcabangController@index')->name('index');
Route::get('/kantor/create-new', 'KantorcabangController@create_page')->name('create');
Route::post('/kantor/create-new', 'KantorcabangController@save_page')->name('create');

// tipe Bangunan
Route::get('/bangunan', 'BangunanController@index')->name('index');
Route::get('/bangunan/create-new', 'BangunanController@create_page')->name('create');
Route::post('/bangunan/create-new', 'BangunanController@save_page')->name('create');

// Tipe
Route::get('/tipe', 'TipeController@index')->name('index');
Route::get('/tipe/create-new', 'TipeController@create_page')->name('create');
Route::post('/tipe/create-new', 'TipeController@save_page')->name('create');
Route::get('/tipe/update/{tipe}', 'TipeController@update_page')->name('update');
Route::post('/tipe/update/{tipe}', 'TipeController@update_save')->name('update');


// Fasilitas Internal
Route::get('/internal', 'InternalController@index')->name('index');
Route::get('/internal/create-new', 'InternalController@create_page')->name('create');
Route::post('/internal/create-new', 'InternalController@save_page')->name('create');
Route::get('/internal/update/{internal}', 'InternalController@update_page')->name('update');
Route::post('/internal/update/{internal}', 'InternalController@update_save')->name('update');


// Fasilitas External
Route::get('/external', 'ExternalController@index')->name('index');
Route::get('/external/create-new', 'ExternalController@create_page')->name('create');
Route::post('/external/create-new', 'ExternalController@save_page')->name('create');
Route::get('/external/update/{external}', 'ExternalController@update_page')->name('update');
Route::post('/external/update/{external}', 'ExternalController@update_save')->name('update');


// Orders
Route::get('/orders', 'OrdersController@index')->name('index');
Route::get('/orders/create-new', 'OrdersController@create_page')->name('create_page');
Route::post('/orders/create-new', 'OrdersController@save_page')->name('create_page');
Route::get('/orders/update/{orders}', 'OrdersController@update_page')->name('update');
