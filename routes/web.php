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
Route::group(['middleware'=>['auth','1']],function(){

    Route::get('/dashboard', function () {
        return view('chefh.dashboard');
    });
   

});

Route::group(['middleware'=>['auth','2']],function(){

    Route::get('/dashboard2', function () {
        return view('resprh.dashboard');
    });
    Route::get('/users','UserController@index');
    Route::get('/users/{id}','UserController@show');
    Route::delete('/user/{id}','UserController@destroy');
    Route::put('/edituser/{id}','UserController@update');
         

    Route::resource('service', 'ServiceController');
    Route::resource('typecon', 'TypecongeController');
    Route::resource('typedoc', 'TypedocumentController');
    Route::get('/admi', function(){
        return view('resprh.rerh.admini');
    });
   
   

});
Route::group(['middleware'=>['auth','3']],function(){

    Route::get('/dashboard3', function () {
        return view('resppaie.dashboard');
    });
   

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
