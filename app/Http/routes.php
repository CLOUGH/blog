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
Route::group(['middleware' => 'web'], function () {
    Route::get('coming-soon',function(){
        return view('coming-soon');
    });

    // Authentication Routes...
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    // Registration Routes...
    // Route::get('register', 'Auth\AuthController@showRegistrationForm');
    // Route::post('register', 'Auth\AuthController@register')

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    Route::resource('posts','PostController',['only'=>['index','show']]);
    Route::resource('posts.comments','PostCommentController',['only' => ['update','delete','store']]);
    Route::post('comments/{comment_id}/replies', 'CommentController@storeReply');
    Route::resource('portfolio', 'PortfolioController', ['only'=>['index','show']]);
    Route::get('/', 'HomeController@index');

    Route::group(['prefix'=>'api'], function(){
        Route::get('/tags','TagController@index');
        Route::get('/categories','CategoryController@index');
    });

    Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
        Route::get('/', function(){
            return redirect('admin/dashboard');
        });

        Route::get('dashboard', 'DashboardController@index');
        Route::resource('posts','ManagePostController');
        Route::resource('portfolios','AdminPortfolioController');
    });
});
