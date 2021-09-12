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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**
 * User Pages
 */
Route::get('/dashboard', 'UserController@index')->name('user.dashboard');
Route::post('/preferences/store', 'PreferencesController@store')->name('user.preferences.store');
Route::get('/preferences', 'PreferencesController@index')->name('user.preferences');
//reading show all
Route::get('/readings', 'ReadingController@index')->name('user.readings');
//reading create reading
Route::get('/readings/create', 'ReadingController@create')->name('readings.create');
//reading store
Route::post('/readings/store', 'ReadingController@store')->name('readings.store');
/**
 * Admin pages
 */
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');