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
    Route::post('schedules/{$id}', 'SchedulesController@update')->name('schedulesUpdate');
    Route::resource('doctors', 'DoctorsController');
    Route::resource('profiles', 'ProfilesController');
    Route::resource('patients', 'PatientsControllers');
    Route::get('singUP', 'PatientsControllers@singUP')->name('singUP');
    Route::post('save', 'PatientsControllers@save')->name('save');
    Route::resource('rooms', 'RoomsController');
//    Route::resource('patients', 'PatientsController');
    Route::get('/',function(){
        return view('admin.welcomeAdmin');
    });
});
Route::group(['middleware'=>'guest'],function(){
    Route::resource('workings', 'WorkingsController');
//    Route::get('singUP', 'WorkingsController@singUP')->name('singUP');
//    Route::post('save', 'WorkingsController@save')->name('save');
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::group(['middleware'=>'auth'],function(){
    Route::get('singUP', 'WorkingsController@singUP')->name('singUPq');
    Route::post('save', 'WorkingsController@save')->name('saveq');
});
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', 'PagesController@index');
//Route::get('/{category}', 'PagesController@category')->name('category');
//Route::get('/{category}/{post}', 'PagesController@post')->name('post');
//Route::get('/{doctors}', 'PagesController@doctor')->name('doctor');

//Route::get('/calendar', 'CalendarController@index');
//Route::get('/singUp',[
//'uses'=>'PatientsController@singUp' ,
//'as'=>'admin/patients/singUp'
//]);

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/events', 'EventsController@index');
//Route::get('admin/patients/', 'PatientsController@index');

//Route::get('show/{schedule}', 'ScheduleController@show');