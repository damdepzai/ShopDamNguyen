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
Route::prefix('admin-shop')->group(function (){
    Route::get('/login','AdminController@getLogin')->name('admin.login');
    Route::post('/login','AdminController@postLogin');
    Route::get('/register','AdminController@getregister')->name('admin.register');
    Route::post('/register','AdminController@postRegister');
});

Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function() {
    Route::get('/logout','AdminController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::group(['prefix' => 'category'],function (){
        Route::get('/','AdminCategoryController@index')->name('category.home');
        Route::get('/create','AdminCategoryController@create')->name('category.create');
        Route::post('/create','AdminCategoryController@store');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('category.update');
        Route::post('/update/{id}','AdminCategoryController@update');
        Route::get('/{action}/{id}','AdminCategoryController@action')->name('category.action');
    });
    Route::group(['prefix' => 'product'],function (){
        Route::get('/','AdminProductController@index')->name('product.home');
        Route::get('/create','AdminProductController@create')->name('product.create');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('product.update');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@action')->name('product.action');
    });
    Route::group(['prefix' => 'article'],function (){
        Route::get('/','AdminArticleController@index')->name('article.home');
        Route::get('/create','AdminArticleController@create')->name('article.create');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('article.update');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::get('/{action}/{id}','AdminArticleController@action')->name('article.action');
    });
    Route::group(['prefix'=>'transaction'],function (){
       Route::get('/','AdminTransactionController@index')->name('transaction.home');
       Route::get('/view/{id}','AdminTransactionController@show')->name('transaction.show');
       Route::get('/active/{id}','AdminTransactionController@action')->name('action.active');
    });
    Route::group(['prefix'=>'user'],function (){
        Route::get('/','AdminUserController@index')->name('user.home');
        Route::get('/create','AdminUserController@create')->name('user.create');
        Route::post('/create','AdminUserController@store');
        Route::get('/update/{id}','AdminUserController@update')->name('user.update');
        Route::get('/update/{id}','AdminUserController@edit')->name('user.update');
        Route::get('/delete/{id}','AdminUserController@destroy')->name('user.delete');
    });
});
