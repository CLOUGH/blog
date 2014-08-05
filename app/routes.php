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
Event::listen('illuminate.query', function($sql)
{
    //var_dump($sql);
});

Route::get('/', array('uses'=>'HomeController@index','as'=>'home.index'));
Route::get('/home', array('uses'=>'HomeController@index','as'=>'home.index',));
Route::get('/home/edit', array('uses'=>'HomeController@edit','as'=>'home.edit','before'=>'auth'));
Route::post('/home/update', array('uses'=>'HomeController@update','as'=>'home.update','before'=>'auth'));
Route::get('/login',array('uses'=>'HomeController@showLogin','as'=>'home.login'));
Route::get('/logout',array('uses'=>'HomeController@logout','as'=>'home.logout','before'=>'auth'));
Route::post('/login',array('uses'=>'HomeController@doLogin','as'=>'home.login'));

Route::resource('blog', 'BlogsController');
Route::post('/blog/store_comment',array('uses'=>'BlogsController@storeComment', 'as'=>'blog.store_comment'));
Route::post('/blog/store_reply_comment',array('uses'=>'BlogsController@storeReplyComment', 'as'=>'blog.store_reply_comment'));

Route::resource('about','AboutController');
