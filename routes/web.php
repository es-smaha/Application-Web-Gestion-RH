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
    return view('auth.login');
});
Route::resource('doc', 'DocumentController');
Route::get('/change','auth\ChangePasswordController@index');
Route::post('/update-password','auth\ChangePasswordController@passwordupdate');
Route::group(['middleware'=>['auth','1']],function(){

    Route::get('/dashboard', function () {
        return view('chefh.dashboard');
    });
    Route::get('/demande-conge','TraitedemandeController@index');
    Route::get('/conge-accepter','TraitedemandeController@accepter');
    Route::get('/conge-refuser','TraitedemandeController@refuser');
    Route::put('/confirmer/{id}/edit','TraitedemandeController@valider');
    Route::delete('/delete/{id}','TraitedemandeController@destroy');
   

});

Route::group(['middleware'=>['auth','2']],function(){

Route::get('/docum','RhdocumentController@index');
Route::put('/docum/{id}','RhdocumentController@valider');

Route::get('/users','UserController@index');
Route::get('/create','UserController@create');
Route::post('/save-agents','UserController@store');
Route::get('/users/{id}','UserController@show');
Route::delete('/user/{id}','UserController@destroy');
Route::put('/edituser/{id}','UserController@update');

    Route::get('/dashboard2', function () {
        return view('resprh.dashboard');

    });
      
   
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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::resource('conge', 'DemandecongeController');

