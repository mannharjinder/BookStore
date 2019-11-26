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




route::get('/', [
    'uses' => 'WelcomeController@getIndex',
    'as' => 'bt.index'
]);

//Route::get('/checkout', function () {
//    return view('Orders.create');
//})->name('Orders.create');

Route::group(['prefix' => 'Book'], function (){
    Route::get('',[
        'uses' => 'WelcomeController@getIndexDetail',
        'as' => 'bt.indexDetail'
    ]);
    Route::get('search',[
        'uses' => 'WelcomeController@searchBy',
        'as' => 'book.searchBy'
    ]);
});

//Route::get('/carousel', function () {
//    return view('shared.carousel');
//});

Route::get('/About', function () {
    return view('Home.about');
})->name('home.about');

//Route::get('/admin/test', function () {
//    return view('admin.bookCreate');
//})->name('bt.adBookIndex');

Route::group(['prefix' => 'checkout'], function(){
    Route::get('create',[
        'uses' => 'OrderController@getCreate',
        'as' => 'order.create'
    ]);

    Route::post('create', [
        'uses' => 'OrderController@postCreate',
        'as' => 'order.create'
    ]);
});

Route::group(['prefix' => 'Order'], function(){
    Route::get('',[
        'uses' => 'OrderController@getIndex',
        'as' => 'order.index'
    ]);
    Route::get('update/{id}',[
        'uses' => 'OrderController@getUpdate',
        'as' => 'order.update'
    ]);
    Route::post('update/{id}',[
        'uses' => 'OrderController@postUpdate',
        'as' => 'order.update'
    ]);
    Route::get('delete/{id}',[
       'uses' => 'OrderController@postDelete',
       'as' => 'order.delete'
    ]);
});

Route::group(['prefix' => 'OrderDetail'], function(){
    Route::get('order/{id}',[
        'uses' => 'OrderDetailController@getIndex',
        'as' => 'orderDetail.index'
    ]);
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [
        'uses' => 'BookController@getIndex',
        'as' => 'book.index'
    ]);

    Route::post('create', [
        'uses' => 'BookController@postCreate',
        'as' => 'book.create'
    ]);
    Route::get('create', [
        'uses' => 'BookController@getCreate',
        'as' => 'book.create'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'BookController@getEdit',
        'as' => 'book.edit'
    ]);

    Route::post('edit/{id}', [
        'uses' => 'BookController@postUpdate',
        'as' => 'book.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'BookController@postDelete',
        'as' => 'book.delete'
    ]);
});

Route::group(['prefix' => 'category'], function () {
    Route::get('', [
        'uses' => 'CategoryController@getIndex',
        'as' => 'category.index'
    ]);

    Route::post('create', [
        'uses' => 'CategoryController@postCreate',
        'as' => 'category.create'
    ]);

    Route::get('create', [
        'uses' => 'CategoryController@getCreate',
        'as' => 'category.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'CategoryController@getEdit',
        'as' => 'category.edit'
    ]);

    Route::post('edit/{id}', [
        'uses' => 'CategoryController@postUpdate',
        'as' => 'category.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'CategoryController@postDelete',
        'as' => 'category.delete'
    ]);
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('', [
        'uses' => 'SupplierController@getIndex',
        'as' => 'supplier.index'
    ]);

    Route::post('create', [
        'uses' => 'SupplierController@postCreate',
        'as' => 'supplier.create'
    ]);

    Route::get('create', [
        'uses' => 'SupplierController@getCreate',
        'as' => 'supplier.create'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'SupplierController@getEdit',
        'as' => 'supplier.edit'
    ]);

    Route::post('edit/{id}', [
        'uses' => 'SupplierController@postUpdate',
        'as' => 'supplier.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'SupplierController@postDelete',
        'as' => 'supplier.delete'
    ]);
});

Route::group(['prefix' => 'shoppingCart'], function () {
    Route::get('', [
        'uses' => 'ShoppingCartController@getIndex',
        'as' => 'shoppingCart.index'
    ]);
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('add-to-cart/{id}', 'ShoppingCartController@addToCart')->name('add-to-cart');

Route::get('remove-from-cart/{id}', 'ShoppingCartController@removeFromCart')->name('remove-from-cart');

Route::delete('remove-from-cart', 'ShoppingCartController@remove');

Route::get('empty-cart', 'ShoppingCartController@emptyCart')->name('empty-cart');
