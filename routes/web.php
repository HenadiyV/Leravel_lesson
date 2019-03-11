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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::resource('posts', 'PostsController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('schedules', 'SchedulesController');
    Route::resource('doctors', 'DoctorsController');
    Route::resource('profiles', 'ProfilesController');
    Route::resource('rooms', 'RoomsController');
    Route::get('/',function(){
        return view('admin.welcomeAdmin');
    });
});
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', 'PagesController@index');
//Route::get('/{category}', 'PagesController@category')->name('category');
//Route::get('/{category}/{post}', 'PagesController@post')->name('post');
//Route::get('/{doctors}', 'PagesController@doctor')->name('doctor');


Route::get('/home', 'HomeController@index')->name('home');
