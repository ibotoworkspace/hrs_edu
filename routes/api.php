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

Route::group(['middleware' => 'auth.client_token','prefix'=>'user'], function () {

    // Route::post('video', 'Services\UserController@video');

    Route::post('/signup', 'services\UserController@signUp');
    Route::post('/login', 'services\UserController@login');
    Route::post('/logout', 'services\UserController@logout');
    Route::post('/profile_update', 'services\UserController@profile_update');
    Route::post('/forgetpassword', 'services\UserController@forgetpassword');
    // Route::get('user/logout', 'services\UserController@logout');
    Route::get('/home', 'services\HomeController@home');
    Route::get('/registeredcourses', 'services\CoursesController@registeredcourses');
    Route::post('/register', 'services\CoursesController@register');
    Route::get('/mycourse', 'services\CoursesController@myCourse');
    Route::post('/coursevideos', 'services\VideoController@coursevideos');
    Route::post('/course', 'services\CoursesController@course');
    Route::post('/quiz', 'services\QuizControlller@quiz');
    Route::post('/chapters', 'services\CoursesController@chapters');
    Route::post('/chapter', 'services\CoursesController@chapter');
    Route::post('/contactus', 'services\ContactusController@contactus');
    Route::post('/ticketsubmit', 'services\TicketControlller@ticketsubmit');
    Route::get('/getChapter', 'services\ChapterController@getChapter');
    Route::get('/profile', 'services\UserController@getUser');

    Route::get('/testList', 'services\TestController@testList');
    Route::get('/startTest', 'services\TestController@start_test');
    Route::get('/showScore', 'services\TestController@showScore');
    Route::post('/saveTest', 'services\TestController@testSave');
    Route::post('/ebooksList', 'services\EbooksController@get_ebooks');

    //payment
    // Route::get('/makepayment', 'Student\PaymentController@make_payment')
    //

});
Route::get('/makepayment', 'Student\PaymentController@make_payment_app');
