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
    return view('index');
});

Route::post('/signup', [
	'uses'=>'AuthController@signUp',
	'as' => 'signup'
]);

Route::get('/login', [
	'uses'=>'AuthController@login',
	'as'=> 'login.view'
]);

Route::get('/signup', [
	'uses'=>'AuthController@signupview',
	'as'=> 'signup.view'
]);

Route::post('/login', [
	'uses' => 'AuthController@signIn',
	'as' => 'login'
]);

Route::get('password',function(){
	return view('index');
})->name('password.request');
