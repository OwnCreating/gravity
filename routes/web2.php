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



/* Start - bobocodex57 */

Route::view('/', 'welcome');

// Backend

Route::group(array('prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => 'admin'), function() {
    
    Route::view('/', 'backend.layouts.template');

    Route::resource('/role', 'RoleController');

    // Route::resource('/assign', 'UserController');
    Route::get('/assign', 'UserController@index')->name('assign.index');
    Route::post('/assign/store/{id}', 'UserController@store')->name('assign.store');
    Route::get('/assign/{id}/create', 'UserController@create')->name('assign.create');
    Route::get('/assign/{id}/edit', 'UserController@edit')->name('assign.edit');
    Route::post('/assign/{id}', 'UserController@update')->name('assign.update');



    Route::get('/list', 'AdminController@list')->name('customer.list');

    Route::resource('/product', 'ProductController');
    Route::post('/product/del', 'ProductController@photo')->name('product.photo');

    // Route::post('/custom/del', 'CustomController@photo')->name('custom.photo');

});

// Auth

Route::get('/register', 'Auth\RegisterController@showRegister')->name('show.register');
Route::post('/register', 'Auth\RegisterController@Register')->name('register');

Route::get('/login', 'Auth\LoginController@showLogin')->name('show.login');
Route::post('/login', 'Auth\LoginController@Login')->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes(['register' => false]);

/* End - bobocodex57 */