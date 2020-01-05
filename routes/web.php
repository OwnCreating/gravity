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

/* JasperCool Codex Call Route  Start*/

Route::view('/', 'frontend.pages.home')->name('home');
Route::view('/home2', 'frontend.pages.home2')->name('home2');
Route::view('/loginpage', 'frontend.pages.login')->name('login_register');
Route::view('/contact', 'frontend.pages.contact')->name('contact');
Route::view('/about', 'frontend.pages.about')->name('about');
Route::view('/my_account', 'frontend.pages.my_account')->name('my_account');
Route::view('/products', 'frontend.pages.products')->name('products');
Route::view('/product_single', 'frontend.pages.product_single')->name('product.single');
Route::view('/cart', 'frontend.pages.cart')->name('cart');
Route::view('/wishlist', 'frontend.pages.wishlist')->name('wishlist');
Route::view('/checkout', 'frontend.pages.checkout')->name('checkout');
Route::view('/order', 'frontend.pages.order')->name('order');
Route::view('/blog', 'frontend.pages.blog')->name('blog');
Route::view('/single-blog', 'frontend.pages.single-blog')->name('singleblog');


/* JasperCool Codex Call Route  Start*/



/* Start bobocodex */

Route::group(array('prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => 'admin'), function() {
    
    Route::view('/', 'backend.index');

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


