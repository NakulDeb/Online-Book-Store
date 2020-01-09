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




Route::get('/go-admin', 'AdminController@admin');
Route::get('/admin-deshboard', 'SuperAdminController@admin');
Route::get('/admin-login', 'AdminController@login');
Route::get('/admin-logout', 'SuperAdminController@logout');


Route::get('/all-category', 'CategoryController@allCategory');
Route::get('/add-category', 'CategoryController@addCategory');
Route::get('/save-category', 'CategoryController@saveCategory');
Route::get('/set-unactive/{category_id}', 'CategoryController@unactive');
Route::get('/set-active/{category_id}', 'CategoryController@active');

Route::get('/edit-category/{category_id}', 'CategoryController@editCategory');
Route::get('/update-category/{category_id}', 'CategoryController@updateCategory');
Route::get('/delete-category/{category_id}', 'CategoryController@deleteCategory');


Route::get('/add-product', 'ProductController@addProduct');
Route::post('/save-product', 'ProductController@saveProduct');
Route::get('/all-product', 'ProductController@allProduct');
Route::get('/set-deactive-product/{product_id}', 'ProductController@deactiveProduct');
Route::get('/set-active-product/{product_id}', 'ProductController@activeProduct');

Route::get('/edit-product/{product_id}', 'ProductController@editProduct');
Route::get('/update-product/{product_id}', 'ProductController@updateProduct');
Route::get('/delete-product/{product_id}', 'ProductController@deleteProduct');



Route::get('/show-product-by-category/{category_id}', 'HomeController@showByCategory');



Route::get('/users', 'UserController@user');
Route::get('/user-login', 'UserController@login');
Route::get('/user-signup', 'UserController@signup');
Route::get('/user-logout', 'UserController@logout');
Route::get('/user-profile/{profile_id}', 'UserController@userProfile');
Route::get('/delete-user/{profile_id}', 'UserController@deleteUser');



Route::get('/view-details/{product_id}', 'HomeController@viewDetails');


Route::get('/','HomeController@home');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');



Route::get('/add-announcement', 'AnnouncementController@addAnnouncement');
Route::get('/save-announcement', 'AnnouncementController@saveAnnouncement');
Route::get('/all-announcement', 'AnnouncementController@allAnnouncement');


        