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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile_store','HomeController@profile_store')->name('profile_store');


/*
|
|Admin Route
*/

Route::get('/admin/login','Admin\AdminController@login')->name('admin.login');
Route::name('admin.')->prefix('admin')->namespace('Admin')->middleware('admin')->group(function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashoboard');
    Route::resource('/profile','ProfileformController');
    Route::get('/all_profile','ProfileformController@all_profile_show')->name('all_profile');
    Route::get('/all_profile/excel','ProfileformController@excelConverter')->name('all_profile.excel');
    Route::get('all_profile/export/{type}','ProfileformController@export')->name('all_profile.export');
});
