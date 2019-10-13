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
/*Home page related route Start */
Route::get('/','HomeController@index')->name('home');
Route::get('post/{id}/details','HomeController@details')->name('post.details');
Route::get('about_us','HomeController@aboutUs')->name('about_us');

Route::get('contact_us','HomeController@contactUs')->name('contact_us');
Route::post('contact/message','HomeController@contactMessageSend')->name('admin.message');
Route::get('contact/message','HomeController@messageRead')->name('admin.message.index');
/*Home page related route End */

/*Main Admin/User Related Route Start */
Route::get('login','LoginController@index')->name('user.login');
Route::post('login','LoginController@login')->name('login');
Route::post('logout','LoginController@logout')->name('logout');
/*Main Admin/User Related Route End */

Route::middleware('auth')->group(function (){

    Route::get('dashboard','DashboardController@dashboard')->middleware('auth')->name('admin.dashboard');
    Route::resource('post','PostController');
    Route::resource('user','UserController');
    Route::resource('category','CategoryController');
    Route::resource('author','AuthorController');
    Route::resource('about','AboutController');

});

