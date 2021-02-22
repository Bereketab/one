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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('update-password/','App\Http\Controllers\SettingController@edit')->middleware('auth')->name('update_password');
Route::post('update-password/','App\Http\Controllers\SettingController@update');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout', function () {
    return abort(404);
})->name('logout');




Route::get('Add/News_Events','App\Http\Controllers\News_Event@news_get')->middleware('auth')->name('news_get');
Route::post('Add/News_Events','App\Http\Controllers\News_Event@news_post')->name('news_post');
Route::get('News_Events/list','App\Http\Controllers\News_Event@news_list')->middleware('auth')->name('news_list');
Route::post('News_Events/edit',['as' => 'edit', 'uses' => 'App\Http\Controllers\News_Event@edit'])->middleware('auth');
// Route::post('Air-rental','App\Http\Controllers\News_Event@update')->name('air_rental_update');
Route::post('News_Events/delete','App\Http\Controllers\News_Event@destroy')->name('destroy')->middleware('auth');
// Route::get('Air/{id}','App\Http\Controllers\News_Event@air_detail')->name('air_detail');



Route::get('/','App\Http\Controllers\News_Event@index')->name('index');
Route::get('/about','App\Http\Controllers\News_Event@about')->name('about');
Route::get('/news','App\Http\Controllers\News_Event@news')->name('news');
Route::get('/news/{id}','App\Http\Controllers\News_Event@news_detail')->name('news_detail');
Route::get('/product','App\Http\Controllers\News_Event@product')->name('product');
Route::post('Add/Subscribers','App\Http\Controllers\News_Event@subscriber_store_post')->name('post_subscriber');

Route::get('/filter_news','App\Http\Controllers\News_Event@filter_news')->name('filter_news');
Route::get('/filter_event','App\Http\Controllers\News_Event@filter_event')->name('filter_event');
