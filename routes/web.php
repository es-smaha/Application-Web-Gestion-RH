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
Route::get('/change','auth\ChangePasswordController@index');
Route::post('/update-password','auth\ChangePasswordController@passwordupdate');
Auth::routes();
Route::get('/404error', function () {
    return view('notfound');});
   
    Route::resource('/events','EventController');
    Route::get('/display','EventController@show');
    Route::get('/cal','EventController@cal');
//
   
Route::group(['middleware'=>['auth','1']],function()
    {
      
    Route::get('/profilh','ProfilController@indexh');
    Route::get('/reclamationh','reclamationController@indexH');
    Route::get('/demande-conge','TraitedemandeController@index');
    Route::get('/conge-accepter','TraitedemandeController@accepter');
    Route::get('/conge-refuser','TraitedemandeController@refuser');
    Route::put('/confirmer/{id}/edit','TraitedemandeController@valider');
    Route::put('/refuser/{id}','TraitedemandeController@refuuseer');
    Route::delete('/delete/{id}','TraitedemandeController@destroy');
    Route::post('/motifs','TraitedemandeController@store');
    Route::post('/pdfinsert','TraitedemandeController@pdf');
    Route::get('/us/{id}','TraitedemandeController@sho');
    Route::get('/dashboard', function () {
        return view('chefh.dashboard');
    });

   
    //calendier  

   
    Route::get('/deleteevent','EventController@show');

    //planning
    Route::get('/ex', 'ImportExcelController@index');
    Route::get('/export', 'ImportExcelController@export');
    Route::post('/import', 'ImportExcelController@import');
    

   });
  

Route::group(['middleware'=>['auth','2']],function()
    {
       
    Route::get('/profilrh','ProfilController@indexrh'); 
    Route::get('/reclamationr','reclamationController@indexRh');
    Route::delete('/reclamationr/{id}', 'reclamationController@destroyr');
    Route::get('/docum','RhdocumentController@index');
    Route::get('/document-pret','RhdocumentController@pret');
    Route::post('/pdf','RhdocumentController@pdf');
    Route::put('/docum/{id}','RhdocumentController@valider');
    Route::get('/users','UserController@index');
    Route::get('/usersservice','UserController@service');
    Route::get('/create','UserController@create');
    Route::post('/save-agents','UserController@store');
    Route::get('/users/{id}','UserController@show');
    Route::delete('/user/{id}','UserController@destroy');
    Route::put('/edituser/{id}','UserController@update');
    Route::get('/dashboard2', function () {
            return view('resprh.dashboard');});
    Route::resource('service', 'ServiceController');
    Route::resource('typecon', 'TypecongeController');
    Route::resource('typedoc', 'TypedocumentController');
    Route::get('/administation', function(){
            return view('resprh.rerh.admini');});
          
    Route::get('/planningrh', 'ImportExcelController@indexRH');
    Route::get('/dashboard2', 'AdministrationController@index');
    Route::get('/administration', 'AdministrationController@admini');
    //prophil
    Route::get('/Myprophil', 'AdministrationController@profil');
    Route::post('/Myprophil', 'AdministrationController@update');
    Route::get('/Reclamationn', 'AdministrationController@reclamation');
    Route::post('/Reclamationn', 'AdministrationController@store');
    Route::put('/Reclamationn/{id}', 'AdministrationController@edit');
    Route::delete('/Reclamationn/{id}', 'AdministrationController@destroy');
       

});

Route::group(['middleware'=>['auth','0']],function()
    {
        Route::get('/home','HomeController@index')->name('home');
        Route::resource('doc', 'DocumentController');
       
        
        
        Route::resource('conge', 'DemandecongeController');
        Route::resource('/profil','ProfilController');
        Route::resource('/reclamation','reclamationController');
        Route::get('/planningR', 'ImportExcelController@indexA');


 });
 
Route::group(['middleware'=>['auth','3']],function()
    {
    Route::get('/profilpaie','ProfilController@indexpaie');
    Route::get('/dashboard3', function () {
        return view('resppaie.dashboard');});
    // cal
    // Route::get('/cal','Calpaie@cal');
 
    Route::get('/confin','ConfirmerpaieController@index');
    Route::get('/decision-accepter','ConfirmerpaieController@archive1');
    Route::get('/decision-refuser','ConfirmerpaieController@archive2');
    Route::put('/confin/{id}','ConfirmerpaieController@valider');
    Route::put('/solde','ConfirmerpaieController@update');
    Route::get('/planning', 'ConfirmerpaieController@planning');
    Route::get('/calendrie-conge', 'ConfirmerpaieController@calendar');
    Route::get('/liste-agent', 'ConfirmerpaieController@agent');
    Route::get('/liste-agent/{id}', 'ConfirmerpaieController@show');
    Route::get('/reclamation-agent', 'ConfirmerpaieController@reclamation');
   });


