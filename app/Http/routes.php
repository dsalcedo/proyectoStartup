<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'test'], function(){
    Route::get('/', function () {
        return view('welcome');
    });
});


Route::get('auth/{proveedor?}', ['as'=>'auth', 'uses'=>'Auth\SocialAuthController@proveedor']);
Route::get('auth/callback/{proveedor?}', ['as'=>'auth.callback.facebook', 'uses'=>'Auth\SocialAuthController@callbackProveedor']);


Route::get('facebook', ['as'=>'authfb', 'uses'=>'Auth\SocialAuthController@proveedorFB']);