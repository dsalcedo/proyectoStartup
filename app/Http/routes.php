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
Route::get('acerca', ['as'=>'website.acerca', 'uses'=>'WebsiteController@acerca']);
Route::get('terminos-y-condiciones', ['as'=>'website.tos', 'uses'=>'WebsiteController@terminosCondiciones']);

Route::get('auth/{proveedor?}', ['as'=>'auth.social', 'uses'=>'Auth\SocialAuthController@proveedor']);
Route::get('auth/callback/{proveedor?}', ['as'=>'auth.callback.facebook', 'uses'=>'Auth\SocialAuthController@callbackProveedor']);

Route::group(['prefix'=>'app', 'middleware'=>'auth'], function(){
    Route::get('/',['as'=>'app.index', 'uses'=>'Webapp\AppController@index']);
    Route::get('desconectarme',['as'=>'app.desconectar', 'uses'=>'Webapp\AppController@desconectarme']);
    Route::get('crear-anuncio',['as'=>'app.crearAnuncio', 'uses'=>'Webapp\AppController@crearAnuncio']);
    Route::get('buscar',['as'=>'app.buscar', 'uses'=>'Webapp\AppController@buscar']);
});

