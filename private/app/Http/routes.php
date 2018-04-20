<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* File default moved into middleware bracket

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    
Route::get('/', function () {
    if(Auth::user()){
        if(Auth::user()->hak_akses=="admin"){
            return view('home');
        }if(Auth::user()->hak_akses=="user"){
            return view('user');
        }
        else{
            return view('index');
        }
    }
    else{
    return view('login');}
});

Route::post('processregist','Crudcontroller@processregist');
    
    
Route::get('index', function() {
    return view('index');
});
    

Route::get('registrasi', 'Crudcontroller@registrasi');
    

Route::get('registrasisuccess', function() {
    return view('login.registrasisuccess');
}); 
    
    
});