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


Route::get('/', ['as'=>'website.index', 'uses'=>'WebsiteController@index']);

Route::group(['prefix'=>'test'], function(){

});


Route::get('auth/{proveedor?}', ['as'=>'auth.social', 'uses'=>'Auth\SocialAuthController@proveedor']);


Route::get('auth/callback/{proveedor?}', ['as'=>'auth.callback.facebook', 'uses'=>'Auth\SocialAuthController@callbackProveedor']);