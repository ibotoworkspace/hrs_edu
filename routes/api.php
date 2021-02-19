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
    Route::post('user/login', 'services\UserController@login');
    Route::post('user/forgetpassword', 'services\UserController@forgetpassword');
    Route::get('user/logout', 'services\UserController@logout');
    Route::get('user/home', 'services\HomeController@home');
    Route::get('user/registeredcourses', 'services\CoursesController@registeredcourses');
    Route::post('user/course', 'services\CoursesController@course');
    Route::post('user/quiz', 'services\QuizControlller@quiz');
    Route::post('user/chapters', 'services\CoursesController@chapters');
    Route::post('user/chapter', 'services\CoursesController@chapter');
    Route::post('user/contactus', 'services\ContactusController@contactus');
});
