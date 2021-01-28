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

Route::get('user/aboutus', 'User\UserController@aboutUs');

// Route::get('user/aboutus', function () {
//      return 'Hello World';
//  });
 


     Route::get('admin/login', 'Admin\AdminController@index');
     Route::post('admin/checklogin', 'Admin\AdminController@checklogin');
     Route::get('admin/logout', 'Admin\AdminController@logout')->name('logout');

    Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('admin/courses', 'Admin\CoursesController@list')->name('admin/courses');

    Route::get('admin/listofcourses', 'Admin\CoursesController@listofcourses')->name('admin/listofcourses');

    Route::get('admin/listofquiz', 'Admin\CoursesController@listofquiz')->name('admin/listofquiz');

    Route::get('admin/addmaincourse', 'Admin\CoursesController@addmaincourse')->name('admin/addmaincourse');

    Route::get('admin/newquizquestion', 'Admin\CoursesController@newquizquestion')->name('admin/newquizquestion');

    Route::get('admin/listofpromocode', 'Admin\CoursesController@listofpromocode')->name('admin/listofpromocode');

    Route::get('admin/listoforder', 'Admin\CoursesController@listoforder')->name('admin/listofpromocode');

    Route::get('admin/listofmembership', 'Admin\CoursesController@listofmembership')->name('admin/listofpromocode');

    Route::get('admin/ticket', 'Admin\CoursesController@ticket')->name('admin/listofpromocode');
    Route::get('admin/newpromocode', 'Admin\CoursesController@newpromocode')->name('admin/newpromocode');

    Route::get('admin/userperformance', 'Admin\CoursesController@userperformance')->name('admin/userperformance');


    Route::get('user/index', 'User\UserController@index')->name('user/index');

    Route::get('user/aboutus', 'User\UserController@about')->name('user/about');

    Route::get('user/career', 'User\UserController@career')->name('user/career');
    
    
    
    

   
   

 