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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/filter', 'HomeController@filter')->name('filter');
Route::resource('channel', 'ChannelController');

Route::group(['middleware'=>'superAdmin'],function (){
    //categories
    Route::get('/admin/categories','CategoriesController@index')->name('admin.categories.index');
    Route::get('/admin/categories/create','CategoriesController@create')->name('admin.categories.create');
    Route::post('/admin/categories/store','CategoriesController@store')->name('admin.categories.store');
    Route::get('/admin/categories/{user}/edit','CategoriesController@edit')->name('admin.categories.edit');
    Route::put('/admin/categories/{user}','CategoriesController@update')->name('admin.categories.update');
    Route::delete('/admin/categories/{user}','CategoriesController@destroy');

});