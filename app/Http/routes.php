<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('home', 'HomeController@index');


    Route::get('cart', 'CartController@index');

    Route::group(['prefix' => 'manage', 'middleware' => 'role:admin'], function(){

        Route::get('products/create/in-category/{categories}', 'Manage\ProductController@create_in_category');

        Route::resource('categories', 'Manage\CategoryController');
        Route::resource('products', 'Manage\ProductController');
        Route::resource('tags', 'Manage\TagController');
        Route::patch('tags/restore/{trashedtags}', 'Manage\TagController@restore');
    });

    Route::get('manage', 'Manage\ManageController@index');
});

// ARROW
Route::get('/arrow', 'ArrowController@index');

Route::get('/arrow/shop', 'ArrowController@shop');
