<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth.client_token'], function () {
    
    // Route::post('video', 'Services\UserController@video');

    Route::post('user/signup', 'services\UserController@signUp');
    Route::post('user/login', 'Services\UserController@login');
    Route::post('user/forgetpassword', 'Services\UserController@forgetpassword');
    Route::get('user/logout', 'Services\UserController@logout');
    Route::get('user/home', 'Services\HomeController@home');
    Route::get('user/registeredcourses', 'Services\CoursesController@registeredcourses');
    Route::post('user/course', 'Services\CoursesController@course');
    Route::post('user/quiz', 'Services\QuizControlller@quiz');
    Route::post('user/chapters', 'Services\CoursesController@chapters');
    Route::post('user/chapter', 'Services\CoursesController@chapter');
    Route::post('user/contactus', 'Services\ContactusController@contactus');
});
