<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix'=>'backend', 'namespace'=>'Backend'], function(){
    //Route dashboard
    Route::get('/', function(){
        return view('Backend.admin-views.dashboard');
    })->name('dashboard');

    //Route profile
    Route::get('profile', function(){
        return view("Backend.admin-views.profile");
    })->name('profile');

    //Route menutable
    Route::get('menu-table', 'CategoryController@index')->name('menutable');

    //Route usertable
    Route::get('user-table','AdminController@index')->name('usertable');

    //Route weekend
    Route::get('weekend-special', function(){
        return view("Backend.admin-views.weekendspecial");
    })->name('weekend');

    //Route gallery
    Route::get('gallery', function(){
        return view("Backend.admin-views.gallery");
    })->name('gallery');

    //Route location
    Route::get('location', function(){
        return view("Backend.admin-views.location");
    })->name('location');

    //Route feedback
    Route::get('feedback', function(){
        return view("Backend.admin-views.feedback");
    })->name('feedback');

    //Route franchiesinfo
    Route::get('franchiesinfo', function(){
        return view("Backend.admin-views.franchiesinfo");
    })->name('franchiesinfo');

    //Route tbl_amdin
    Route::get('tbl_admin/create', 'AdminController@create')->name('create');
    Route::post('tbl_admin/insert', 'AdminController@store')->name('insert');
    Route::get('tbl_admin/edit/{id}', 'AdminController@edit')->name('edit');
    Route::post('tbl_admin/update/{id}', 'AdminController@update')->name('update');
    Route::get('tbl_admin/delete/{id}', 'AdminController@destroy')->name('delete');

    //Route tbl_user
    Route::get('tbl_user/create', "UserController@create")->name('create_user');
    Route::post('tbl_user/insert', "UserController@store")->name('insert_user');
    Route::get('tbl_user/edit_user/{id}', "UserController@edit")->name('edit_user');
    Route::post('tbl_user/update_user/{id}', "UserController@update")->name("update_user");
    Route::get('tbl_user/delete_user/{id}', "UserController@destroy")->name('delete_user');

    //Route tbl_category
    Route::get('tbl_category/create_category', "CategoryController@create")->name('create_category');
    Route::post('tbl_category/insert_category', "CategoryController@store")->name('insert_category');
    Route::get('tbl_category/edit_category/{id}', "CategoryController@edit")->name('edit_category');
    Route::post('tbl_category/update_category/{id}', "CategoryController@update")->name('update_category');
    Route::get('tbl_category/delete_category/{id}', "CategoryController@destroy")->name('delete_category');

    //Route tbl_delivery
    Route::get('tbl_delivery/create_delivery', "DeliveryController@create")->name('create_delivery');
    Route::post('tbl_delivery/insert_delivery', "DeliveryController@store")->name('insert_delivery');
    Route::get('tbl_delivery/edit_delivery/{id}', "DeliveryController@edit")->name('edit_delivery');
    Route::post('tbl_delivery/update_delivery/{id}', "DeliveryController@update")->name('update_delivery');
    Route::get('tbl_delivery/delete_delivery/{id}', "DeliveryController@destroy")->name('delete_delivery');

    //Route tbl_order
    Route::get('tbl_order/create_order', "OrderController@create")->name('create_order');
    Route::post('tbl_order/insert_order', "OrderController@store")->name('insert_order');
    Route::get('tbl_order/edit_order/{id}', "OrderController@edit")->name('edit_order');
    Route::post('tbl_order/update_order/{id}', "OrderController@update")->name('update_order');
    Route::get('tbl_order/delete_order/{id}', "OrderController@destroy")->name('delete_order');

    //Route tbl_order_details
    Route::get('tbl_order_details/create_order_details', "OrderDetailsController@create")->name('create_order_details');
    Route::post('tbl_order_details/insert_order_details', "OrderDetailsController@store")->name('insert_order_details');
    Route::get('tbl_order_details/edit_order_details/{id}', "OrderDetailsController@edit")->name('edit_order_details');
    Route::post('tbl_order_details/update_order_details/{id}', "OrderDetailsController@update")->name('update_order_details');
    Route::get('tbl_order_details/delete_order_details/{id}', "OrderDetailsController@destroy")->name('delete_order_details');

    //Route tbl_product
    Route::get('tbl_product/create_product', "ProductController@create")->name('create_product');
    Route::post('tbl_product/insert_product', "ProductController@store")->name('insert_product');
    Route::get('tbl_product/edit_product/{id}', "ProductController@edit")->name('edit_product');
    Route::post('tbl_product/update_product/{id}', "ProductController@update")->name('update_product');
    Route::get('tbl_product/delete_product/{id}', "ProductController@destroy")->name('delete_product');
});

//Route login logout register
Route::post('registering', "Login\SignupController@SignUp")->name('login.signup');
Route::post('login', "Login\LoginController@Login")->name('login.signin');
Route::get('logout', "Login\LoginController@Logout")->name('login.logout');

//Route shopping cart
Route::get('addCart/{id}', "CartController@getAddCart")->name('cart.add');
Route::get('deleteCart/{id}', "CartController@removeCart")->name('cart.delete');
Route::get('CartShow', "CartController@getShowCart");
Route::post('CartShow/{id}', "CartController@postCommit")->name('cart.pay');
Route::post('CartShow', "CartController@postCommits")->name('cart.pays');
Route::post('CartShowTwo/{id}', "CartController@postCommitTwo")->name('cart.payTwo');
Route::post('CartShowTwos', "CartController@postCommitTwos")->name('cart.payTwos');
Route::post('CartCheck/{id}', "CartController@checkPay")->name('cart.checkPay');
// Route::get('updateCart', "CartController@updateCart")->name('cart.update');
// Route::post('test1', "CartController@test1")->name('test1');

Route::get('beverages', 'Backend\ProductController@getProductBeverage')->name('beverages');

Route::get('combooffers', function(){
    return view('Frontend.combooffers');
})->name('combooffers');

Route::get('dessert', "Backend\ProductController@getProductDessert")->name('dessert');

Route::get('detailfraninfo', function(){
    return view('Frontend.detailfraninfo');
})->name('detailfraninfo');
Route::get('home', function(){
    return view('Frontend.eProject');
})->name('home');

Route::get('feedback', 'Backend\FeedbackController@index')->name('f.feedback');
Route::post('postFeedBack/{id}', 'Backend\FeedbackController@update')->name('postFeedBack');
Route::post('checkFeed', 'Backend\FeedbackController@checkFeed')->name('checkFeed');

Route::get('franinfo', function(){
    return view('Frontend.franinfo');
})->name('franinfo');

Route::get('galicbreads', 'Backend\ProductController@getProductBread')->name('galicbreads');

Route::get('gallery', function(){
    return view('Frontend.gallery');
})->name('f.gallery');
Route::get('location', function(){
    return view('Frontend.location');
})->name('f.location');
Route::get('menu', function(){
    return view('Frontend.menu');
})->name('menu');
Route::get('picfraninfo', function(){
    return view('Frontend.picfraninfo');
})->name('picfraninfo');

Route::get('pizza', "Backend\ProductController@getProductPizza")->name('pizza');

Route::get('pizzasandwiches', 'Backend\ProductController@getProductSandwiches')->name('pizzasandwiches');

Route::get('shoppingcart', function(){
    return view('Frontend.shoppingcart');
})->name('shoppingcart');
Route::get('storelocation', function(){
    return view('Frontend.storelocation');
})->name('storelocation');
Route::get('weekendspecials', function(){
    return view('Frontend.weekendspecial');
})->name('weekendspecial');
Route::get('pay', "CartController@contentCheckout")->name('pay');

Route::get('completed', function(){
    return view("Frontend.completed");
});
Route::get('payment', "CartController@contentCheckoutTwo")->name('payment');





