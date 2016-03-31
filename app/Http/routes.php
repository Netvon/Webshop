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
    
    Route::get('cart', 'CartController@index');
    Route::post('cart', 'CartController@store');
    Route::delete('cart', 'CartController@destroy');
    Route::get('cart/order', 'CartController@order');
    Route::get('order/address', 'OrderController@index');
    Route::get('order/review-know-customer', 'OrderController@review_known_customer');
    Route::post('order/review-new-customer', 'OrderController@review_new_customer');
    Route::post('order/success', 'OrderController@success');
    
    Route::group(['prefix' => 'manage', 'middleware' => 'role:admin'], function () {

        Route::get('products/create/in-category/{categories}', 'Manage\ProductController@create_in_category');
        Route::get('categories/create/in-category/{categories}', 'Manage\CategoryController@create_in_category');

        Route::resource('categories', 'Manage\CategoryController');
        Route::resource('products', 'Manage\ProductController', ['except' => 'show']);
        Route::resource('tags', 'Manage\TagController', ['except' => 'create']);
        Route::resource('blogs', 'Manage\BlogController', ['except' => 'show']);

        Route::patch('tags/restore/{trashedtags}', 'Manage\TagController@restore');
        Route::patch('categories/restore/{trashedcategories}', 'Manage\CategoryController@restore');
        Route::patch('blogs/restore/{trashedblogs}', 'Manage\BlogController@restore');
        Route::patch('products/restore/{trashedproducts}', 'Manage\ProductController@restore');
    });

    Route::get('manage', 'Manage\ManageController@index');
});

// ARROW
Route::group(['middleware' => 'web'], function () {

    Route::get('/', 'ArrowController@index');
    Route::get('about', 'ArrowController@about');
    Route::get('contact', 'ArrowController@contact');
    Route::get('shop', 'CategoryController@index');
    Route::get('cart', 'CartController@index');
    
    Route::get('blog', 'BlogController@index');
    Route::post('search', 'ProductController@search');
    Route::post('tag', 'ProductController@tag');

    Route::resource('shop/categories', 'CategoryController');
    Route::resource('shop/products', 'ProductController');
    Route::resource('blog', 'BlogController');
});