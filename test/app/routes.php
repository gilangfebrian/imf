<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array('as' => 'home', function () {
    if (!Sentry::check())
        return View::make('home');
    else
        return Redirect::action('DashboardController@index');
}));


Route::resource('dashboard', 'DashboardController');

Route::resource('quiz', 'DashboardController@quiz');

Route::resource('soals', 'SoalsController');

Route::resource('lembars', 'LembarsController');

Route::resource('lembars.soals', 'SoalhaslembarsController');

Route::resource('userjawablembars', 'UserjawablembarsController');

Route::resource('ujians', 'UjiansController');

Route::resource('ujians.soals', 'SoalujiansController');

Route::get('eval', function() {
    return View::make('dashboards.eval');
});

Route::post('processeval', 'DashboardController@processeval');

Route::get('regist', function() {
    return View::make('users.regist');
});

Route::post('registdata', 'UserController@regist');


// Session Routes
Route::get('login', array('as' => 'login', 'uses' => 'SessionController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));
Route::resource('sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));

// User Routes
Route::get('register', array('as' => 'register', 'uses' => 'UserController@create'));
Route::get('users/{id}/activate/{code}', 'UserController@activate')->where('id', '[0-9]+');
Route::get('resend', array('as' => 'resendActivationForm', function () {
    return View::make('users.resend');
}));
Route::post('resend', 'UserController@resend');
Route::get('forgot', array('as' => 'forgotPasswordForm', function () {
    return View::make('users.forgot');
}));
Route::post('forgot', 'UserController@forgot');
Route::post('users/{id}/change', 'UserController@change');
Route::get('users/{id}/reset/{code}', 'UserController@reset')->where('id', '[0-9]+');
Route::get('users/{id}/suspend', array('as' => 'suspendUserForm', function ($id) {
    return View::make('users.suspend')->with('id', $id);
}));
Route::post('users/{id}/suspend', 'UserController@suspend')->where('id', '[0-9]+');
Route::get('users/{id}/unsuspend', 'UserController@unsuspend')->where('id', '[0-9]+');
Route::get('users/{id}/ban', 'UserController@ban')->where('id', '[0-9]+');
Route::get('users/{id}/unban', 'UserController@unban')->where('id', '[0-9]+');
Route::resource('users', 'UserController');