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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');


//dashboard extra
Route::get('/admin', function () {
    return view('admin.dashboard');
});


Route::get('/about', 'User\UserController@About')->name('about');

Route::get('/contract', 'User\UserController@Contract')->name('contract');

Route::get('/vehicle', 'User\UserController@Vehicle')->name('vehicle');
Route::get('/driver', 'User\UserController@Driver')->name('driver');


Route::get('/traffic', 'Traffic\TrafficController@Traffic')->name('traffic');

Route::get('/add_case', 'Traffic\TrafficController@AddCase')->name('add_case');
Route::get('/search_case', 'Traffic\TrafficController@SearchCase')->name('search_case');

//Store Chategory
Route::post('store/vehicle','User\UserController@StoreVehicle')->name('store.vehicle');



// Route::get('/index', function () {
//     return view('index');
// });