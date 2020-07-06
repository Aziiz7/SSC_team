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


Route::get('/about','PagesController@getAbout');
Route::get('/dashboard','PagesController@getDashboard');
Route::get('/newrequest','PagesController@getNewrequest');
Route::get('/dashboard','MessageController@getMessages')->name('HOME');
Route::post('/newrequest/submit','MessageController@submit');
Route::post('/newuser/submit','UserController@submit');
Route::get('/','PagesController@getlogin');
Route::post('/MessageController/checklogin','MessageController@submit');
Route::post('/checklogin', 'MainController@checklogin');
Route::get('/logout', 'MainController@logout');
Route::get('/dashboard/{id}','MessageController@deleteMessages')->name('dltmsg');
Route::get('/dashboard/show/{id}','MessageController@showmessage')->name('showmsg');



Route::get('/students','PagesController@getStudent');
Route::get('/student/show/{id}','StudentController@getStudent');
Route::get('/students','StudentController@getStudent');



Route::post('/register', 'RegistrationController@store');
Route::get('/register', 'RegistrationController@create');

Route::get('/SendEmail', 'PagesController@getSendEmail');
Route::post('/SendEmail', 'PagesController@SendEmail');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
     Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});