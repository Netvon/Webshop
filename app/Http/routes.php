<?php
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

    Route::group(['prefix' => 'manage', 'middleware' => 'role:admin'], function () {

        Route::get('products/create/in-category/{categories}', 'Manage\ProductController@create_in_category');
        Route::get('categories/create/in-category/{categories}', 'Manage\CategoryController@create_in_category');

        Route::resource('categories', 'Manage\CategoryController');
        Route::resource('products', 'Manage\ProductController');
        Route::resource('tags', 'Manage\TagController', ['except' => 'create']);
        Route::resource('blogs', 'Manage\BlogController', ['except' => 'show']);

        Route::patch('tags/restore/{trashedtags}', 'Manage\TagController@restore');
        Route::patch('categories/restore/{trashedcategories}', 'Manage\CategoryController@restore');
    });

    Route::get('manage', 'Manage\ManageController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('arrow', 'ArrowController@index');
    Route::get('arrow/shop', 'ArrowController@shop');
});

Route::resource('/arrow/shop/categories', 'CategoryController');
Route::resource('/arrow/shop/products', 'ProductController');