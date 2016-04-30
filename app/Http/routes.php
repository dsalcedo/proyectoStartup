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
Route::get('partners', ['as'=>'website.partners', 'uses'=>'WebsiteController@partners']);

Route::group(['prefix'=>'app', 'middleware'=>'auth'], function(){
    Route::get('/',['as'=>'app.index', 'uses'=>'Webapp\AppController@index']);
});


Route::get('auth/{proveedor?}', ['as'=>'auth.social', 'uses'=>'Auth\SocialAuthController@proveedor']);


Route::get('auth/callback/{proveedor?}', ['as'=>'auth.callback.facebook', 'uses'=>'Auth\SocialAuthController@callbackProveedor']);