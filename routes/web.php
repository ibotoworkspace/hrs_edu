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


   ////////USER

    Route::get('user/index', 'User\UserController@index')->name('user/index');

    Route::get('user/aboutus', 'User\UserController@about')->name('user/about');

    Route::get('user/career', 'User\UserController@career')->name('user/career');

    Route::get('user/certificate', 'User\UserController@certificate')->name('user/certificate');
    Route::get('user/contactus', 'User\UserController@contactus')->name('user/contactus');
    Route::get('user/contentwriter', 'User\UserController@contentwriter')->name('user/contentwriter');
    Route::get('user/coprate', 'User\UserController@coprate')->name('user/coprate');
    Route::get('user/courses', 'User\UserController@courses')->name('user/courses');
    Route::get('user/designer', 'User\UserController@designer')->name('user/designer');
    Route::get('user/home', 'User\UserController@home')->name('user/home');
    Route::get('user/hrsbackend', 'User\UserController@hrsbackend')->name('user/hrsbackend');
    Route::get('user/hrsdesktop', 'User\UserController@hrsdesktop')->name('user/hrsdesktop');
    
    Route::get('user/hrshacking', 'User\UserController@hrshacking')->name('user/hrshacking');
    Route::get('user/hrsitclient', 'User\UserController@hrsitclient')->name('user/hrsitclient');
    Route::get('user/hrslinux', 'User\UserController@hrslinux')->name('user/hrslinux');
    Route::get('user/hrslti', 'User\UserController@hrslti')->name('user/hrslti');
    Route::get('user/hrsnetwork', 'User\UserController@hrsnetwork')->name('user/hrsnetwork');
    Route::get('user/hrsoffice', 'User\UserController@hrsoffice')->name('user/hrsoffice');
    Route::get('user/hrspc', 'User\UserController@hrspc')->name('user/hrspc');
    Route::get('user/hrssecurity', 'User\UserController@hrssecurity')->name('user/hrssecurity');
    Route::get('user/hrsserver', 'User\UserController@hrsserver')->name('user/hrsserver');
    


    Route::get('user/learning', 'User\UserController@learning')->name('user/learning');
    Route::get('user/makepayment', 'User\UserController@makepayment')->name('user/makepayment');
    Route::get('user/myregstration', 'User\UserController@myregstration')->name('user/myregstration');
    Route::get('user/phpdeveloper', 'User\UserController@phpdeveloper')->name('user/phpdeveloper');
    Route::get('user/registration', 'User\UserController@registration')->name('user/registration');
    Route::get('user/regstration', 'User\UserController@regstration')->name('user/regstration');
    Route::get('user/resourse', 'User\UserController@resourse')->name('user/resourse');
    Route::get('user/skilladvisor', 'User\UserController@skilladvisor')->name('user/skilladvisor');
    Route::get('user/studentdashboard', 'User\UserController@studentdashboard')->name('user/studentdashboard');

    Route::get('user/studentprofile', 'User\UserController@studentprofile')->name('user/studentprofile');
  
    
    
    

   
   

 