<?php

use Illuminate\Support\Facades\Route;

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

#Pages Routes


Route::get('/', 'PagesController@wellcome')->name('home'); #Principal
//Route::get('blog', 'PagesController@blog')->name('blog'); #Blog
//Route::get('blog/{id}', 'PostController@show')->name('blog'); #Blog

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'PagesController@blog')->name('blog'); #Blog
    Route::get('/{post}', 'PostController@show')->name('post.show'); #Show Blog


});

    #Grupo Administración (Intranet)
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'auth'], 
        function () {  

            Route::get('/', 'PagesController@admin')->name('admin'); #Raiz Administración
            Route::get('post', 'Admin\PostController@index')->name('admin.post.index'); #Post Administración
            Route::get('post/create', 'Admin\PostController@create')->name('admin.post.create'); #Post Administración
            Route::post('posts', 'Admin\PostController@store')->name('admin.post.store');
            Route::get('posts/{post}', 'Admin\PostController@edit')->name('admin.post.edit');
            Route::put('posts/{post}', 'Admin\PostController@update')->name('admin.post.update');
            
            Route::post('posts/{post}/photos', 'Admin\PhotosController@store')->name('admin.posts.photo.store');
        }
    );


#Admin Routes






# Auth Routes
    // Auth::routes();
    Auth::routes(['register' => false, 'password.request' => false, 'reset' => false]);

    // Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    // Route::post('login', 'Auth\LoginController@login');
    // Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // // Registration Routes...
    // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    // Route::post('register', 'Auth\RegisterController@register');

    // // Password Reset Routes...
    // Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    // Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    // // Email Verification Routes...
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');