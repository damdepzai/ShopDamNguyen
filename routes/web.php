<?php
Auth::routes();


Route::group(['namespace'=>'Auth'],function (){
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister');

    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin');

    Route::get('dang-xuat','LoginController@getLogOut')->name('get.logout');
});
Route::get('/','HomeController@index')->name('home');
Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('get.list.product');
Route::get('san-pham/{slug}-{id}','ProductDetailController@productDetail')->name('get.detail.product');
Route::get('bai-viet/{slug}-{id}','ArticleController@articleDetail')->name('get.detail.article');
Route::get('tin-tuc','ArticleController@getListArticle')->name('get.list.article');
Route::get('ve-chung-toi','ContactController@aboutus')->name('get.about.us');
Route::prefix('shopping')->group(function (){
    Route::get('/add/{id}','ShoppingCartController@addProduct')->name('add.product');
    Route::get('/delete/{id}','ShoppingCartController@removeOrderProduct')->name('delete.product');
    Route::get('/list-order-product','ShoppingCartController@listOrderProduct')->name('order.product');
});
Route::group(['prefix'=>'cart','middleware'=>'CheckLoginUser'],function (){
    Route::get('/paypal','ShoppingCartController@payPal')->name('paypal.product');
    Route::post('/paypal','ShoppingCartController@saveInfoShoppingCart');
});
Route::group(['prefix'=>'rating','middleware'=>'CheckLoginUser'],function (){
    Route::post('/comment/{id}','RatingController@saveComment')->name('save.comment.product');

});
Route::get('/contact','ContactController@getContact')->name('get.contact');
Route::post('/contact','ContactController@postContact');

Route::group(['prefix'=>'user'],function(){

    Route::get('profile','UserController@getProfile')->name('user.profile');
    Route::post('profile','UserController@saveProfile');
    Route::get('change-password','UserController@password')->name('user.change.password');
    Route::post('change-password','UserController@changepassword');

});


