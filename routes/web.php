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
//     Route::get('admin/courses', 'Admin\CoursesController@list')->name('admin/courses');

    Route::get('admin/listofcourses', 'Admin\CoursesController@listofcourses')->name('admin/listofcourses');

    Route::get('admin/listofquiz', 'Admin\CoursesController@listofquiz')->name('admin/listofquiz');

    Route::get('admin/addmaincourse', 'Admin\CoursesController@addmaincourse')->name('admin/addmaincourse');

    Route::get('admin/newquizquestion', 'Admin\CoursesController@newquizquestion')->name('admin/newquizquestion');

    Route::get('admin/listofpromocode', 'Admin\CoursesController@listofpromocode')->name('admin/listofpromocode');

    Route::get('admin/listoforder', 'Admin\CoursesController@listoforder')->name('admin/listofpromocode');

    Route::get('admin/listofmembership', 'Admin\CoursesController@listofmembership')->name('admin/listofpromocode');

    Route::get('admin/ticket', 'Admin\TicketController@ticket')->name('admin/ticket');
    Route::get('admin/newpromocode', 'Admin\CoursesController@newpromocode')->name('admin/newpromocode');

    Route::get('admin/userperformance', 'Admin\CoursesController@userperformance')->name('admin/userperformance');


   ////////USER

    Route::get('user/index', 'User\UserController@index')->name('user/index');

    Route::get('user/aboutus', 'User\UserController@about')->name('user/about');

    Route::get('user/career', 'User\UserController@career')->name('user/career');

    Route::get('user/certificate', 'User\UserController@certificate')->name('user/certificate');
    Route::get('user/contactus', 'User\ContactUsController@contactus')->name('user/contactus');
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
    Route::get('user/userscore', 'User\UserScoreController@userscore')->name('user/userscore');
    


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
  
    //////crud and view

    Route::get('user/index', 'User\UserController@index')->name('user/index');

    /////

    Route::get('admin/courses', 'Admin\CoursesController@index')->name('courses.index');
    Route::get('admin/courses/create', 'Admin\CoursesController@create')->name('courses.create');
    Route::post('admin/courses/save', 'Admin\CoursesController@save')->name('courses.save');

    Route::get('admin/courses/edit/{id}', 'Admin\CoursesController@edit')->name('courses.edit');
    Route::post('admin/courses/update/{id}', 'Admin\CoursesController@update')->name('courses.update');
    Route::post('admin/courses/delete/{id}', 'Admin\CoursesController@destroy_undestroy')->name('courses.delete');
    Route::get('courses/search', 'Admin\CoursesController@search')->name('courses.search');

    /////////// Video button clicking in course page
    Route::get('courses/videos/{id}', 'Admin\CourseVideosController@index')->name('courses.videos');
  
    // Route::get('coursesvideos/index', 'Admin\CourseVideosController@index')->name('coursesvideos.index');

/////////coursesvideos
    Route::get('admin/coursesvideos/index', 'Admin\CourseVideosController@index')->name('coursesvideos.index'); 

    Route::get('admin/coursesvideos/create/{id}', 'Admin\CourseVideosController@create')->name('coursesvideos.create');
    Route::post('admin/coursesvideos/save', 'Admin\CourseVideosController@save')->name('coursesvideos.save');
    Route::get('admin/coursesvideos/edit/{id}', 'Admin\CourseVideosController@edit')->name('coursesvideos.edit');
    Route::post('admin/coursesvideos/update/{id}', 'Admin\CourseVideosController@update')->name('coursesvideos.update');
    Route::post('admin/coursesvideos/delete/{id}', 'Admin\CourseVideosController@destroy_undestroy')->name('coursesvideos.delete');
    Route::get('coursesvideos/search', 'Admin\CourseVideosController@search')->name('coursesvideos.search');
    
    

    
////////QUIZ crud



   
Route::get('admin/quiz', 'Admin\QuizController@index')->name('quiz.index');
Route::get('admin/quiz/create', 'Admin\QuizController@create')->name('quiz.create');
Route::post('admin/quiz/save', 'Admin\QuizController@save')->name('quiz.save');

Route::get('admin/quiz/edit/{id}', 'Admin\QuizController@edit')->name('quiz.edit');
Route::post('admin/quiz/update/{id}', 'Admin\QuizController@update')->name('quiz.update');
Route::post('admin/quiz/delete/{id}', 'Admin\QuizController@destroy_undestroy')->name('quiz.delete');

 