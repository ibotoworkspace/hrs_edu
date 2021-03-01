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


//                           *********************** ADMIN ROUTE START ****************************


Route::get('admin/login', 'Admin\AdminController@index');
Route::post('admin/checklogin', 'Admin\AdminController@checklogin');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('logout');

Route::group(['middleware' => 'admin_auth', 'prefix' => 'admin'], function () {


    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    //     Route::get('admin/courses', 'Admin\CoursesController@list')->name('admin/courses');

    Route::get('/listofcourses', 'Admin\CoursesController@listofcourses')->name('admin/listofcourses');

    /////listofquiz
    Route::get('/listofquiz/{id}', 'Admin\ListofQuizController@index')->name('admin.listofquiz');
    Route::get('/edit/quiz/{id}', 'Admin\ListofQuizController@edit')->name('edit.quiz');
    Route::get('/quizes', 'Admin\ListofQuizController@index')->name('admin.quizes');
    Route::get('/quiz/create/{id}', 'Admin\ListofQuizController@create')->name('quiz.create');
    Route::post('quizlist/save', 'Admin\ListofQuizController@save')->name('quizlist.save');
    Route::post('quizlist/update/{id}', 'Admin\ListofQuizController@update')->name('quizlist.update');
    Route::get('quizlist/delete/{id}', 'Admin\ListofQuizController@destroy_undestroy')->name('quizlist.delete');

    Route::get('/addmaincourse', 'Admin\CoursesController@addmaincourse')->name('admin/addmaincourse');
    Route::get('/newquizquestion', 'Admin\CoursesController@newquizquestion')->name('admin/newquizquestion');
    Route::get('/listofpromocode', 'Admin\CoursesController@listofpromocode')->name('admin/listofpromocode');

    Route::get('/listoforder', 'Admin\CoursesController@listoforder')->name('admin/listofpromocode');
    Route::get('/listofmembership', 'Admin\CoursesController@listofmembership')->name('admin/listofpromocode');

    Route::get('/ticket', 'Admin\TicketController@ticket')->name('admin/ticket');
    Route::get('/newpromocode', 'Admin\CoursesController@newpromocode')->name('admin/newpromocode');

    Route::get('/userperformance', 'Admin\CoursesController@userperformance')->name('admin/userperformance');
    // admin/choices
    Route::get('/choices/{id}', 'Admin\ChoiceController@index')->name('admin.choices');
    Route::get('/choices', 'Admin\ChoiceController@index')->name('admin.choices');



    // admin/choices/create
    Route::get('/choices/create/{id}', 'Admin\ChoiceController@create')->name('admin.choices.create');

    // choices.save
    Route::post('choices/save', 'Admin\ChoiceController@save')->name('choices.save');

    // list of promo code
    Route::get('/promocode', 'Admin\PromoCodeController@index')->name('admin.promocode');
    Route::get('/promocode/create', 'Admin\PromoCodeController@create')->name('promocode.create');
    Route::post('/promocode/save', 'Admin\PromoCodeController@save')->name('promocode.save');
    Route::get('/promocode/edit/{id}', 'Admin\PromoCodeController@edit')->name('promocode.edit');
    Route::post('/promocode/update/{id}', 'Admin\PromoCodeController@update')->name('promocode.update');

    // admin/courses/delete' .$crs->id
    Route::get('/promocode/delete/{id}', 'Admin\PromoCodeController@destroy_undestroy')->name('promocode.delete');


    /////////coursesvideos

    Route::get('/coursesvideos/index', 'Admin\CourseVideosController@index')->name('coursesvideos.index');
    Route::get('courses/videos/{id}', 'Admin\CourseVideosController@index')->name('courses.videos');
    Route::get('/coursesvideos/create/{id}', 'Admin\CourseVideosController@create')->name('coursesvideos.create');
    Route::post('/coursesvideos/save', 'Admin\CourseVideosController@save')->name('coursesvideos.save');
    Route::get('/coursesvideos/edit/{id}', 'Admin\CourseVideosController@edit')->name('coursesvideos.edit');
    Route::post('/coursesvideos/update/{id}', 'Admin\CourseVideosController@update')->name('coursesvideos.update');
    Route::get('/coursesvideos/delete/{id}', 'Admin\CourseVideosController@destroy_undestroy')->name('coursesvideos.delete');
    Route::get('coursesvideos/search', 'Admin\CourseVideosController@search')->name('coursesvideos.search');


    // lectures button clicking in course page
    Route::get('/chapter/{id}', 'Admin\ChapterController@index')->name('chapters.index');
    Route::get('/chapter', 'Admin\ChapterController@index')->name('chapter.index');


    Route::get('/chapter/create/{id}', 'Admin\ChapterController@create')->name('chapter.create');
    Route::post('/chapter/save', 'Admin\ChapterController@save')->name('chapter.save');

    Route::get('/chapter/edit/{id}', 'Admin\ChapterController@edit')->name('chapter.edit');
    Route::post('/chapter/update/{id}', 'Admin\ChapterController@update')->name('chapter.update');
    Route::post('/chapter/delete/{id}', 'Admin\ChapterController@destroy_undestroy')->name('chapter.delete');
    Route::get('chapter/search', 'Admin\ChapterController@search')->name('chapter.search');
});


//                              *********************** ADMIN ROUTE END ****************************




//                              *********************** USER ROUTE START ****************************



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
// Route::get('user/hrsbackend', 'User\UserController@hrsbackend')->name('user/hrsbackend');
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
////////user login
Route::get('user/login', 'User\UserController@login')->name('user/user/login');

Route::post('user/checklogin', 'User\UserController@checklogin');
Route::get('user/logout', 'User\UserController@logout')->name('logout');



Route::get('user/learning', 'User\UserController@learning')->name('user/learning');
// Route::get('user/makepayment', 'User\UserController@makepayment')->name('user/makepayment');
// Route::get('user/myregstration', 'User\UserController@myregstration')->name('user/myregstration');
Route::get('user/phpdeveloper', 'User\UserController@phpdeveloper')->name('user/phpdeveloper');

/////user/registration
Route::get('user/registration', 'User\StudentRegistrationController@index')->name('user.registration');
Route::post('userregistered/save', 'User\StudentRegistrationController@save')->name('userregistered.save');
Route::get('user/list', 'User\StudentRegistrationController@list')->name('user.list');
////////userlist.search
Route::get('user/list/search', 'User\StudentRegistrationController@search')->name('userlist.search');



// Route::get('user/regstration', 'User\UserController@regstration')->name('user/regstration');
Route::get('user/resource', 'User\UserController@resourse')->name('user/resourse');
Route::get('user/skilladvisor', 'User\SkillAdvisorController@index')->name('user/skilladvisor');
Route::get('user/advisorlist', 'User\SkillAdvisorController@list')->name('user/advisorlist');
Route::post('user/advisor/status_update/{id}', 'User\SkillAdvisorController@status_update')->name('advisor.status_update');
Route::get('advisor.search', 'User\SkillAdvisorController@search')->name('advisor.search');
//////advisor.search

//////userskill.save

// Route::get('userskill/create', 'User\SkillAdvisorController@create')->name('userskill.create');
Route::post('userskill/save', 'User\SkillAdvisorController@save')->name('userskill.save');

// Route::get('user/studentdashboard', 'User\UserController@studentdashboard')->name('user/studentdashboard');

// Route::get('user/studentprofile', 'User\UserController@studentprofile')->name('user/studentprofile');

//////crud and view 

Route::get('user/index', 'User\UserController@index')->name('user/index');

/////courses crud////////////admin crud pages

Route::get('admin/courses', 'Admin\CoursesController@index')->name('courses.index');
Route::get('admin/courses/create', 'Admin\CoursesController@create')->name('courses.create');
Route::post('admin/courses/save', 'Admin\CoursesController@save')->name('courses.save');

// Route::get('admin/courses/edit/{id}', 'Admin\CoursesController@edit')->name('courses.edit');
// Route::post('admin/courses/update/{id}', 'Admin\CoursesController@update')->name('courses.update');
// Route::post('admin/courses/delete/{id}', 'Admin\CoursesController@destroy_undestroy')->name('courses.delete');
Route::get('courses/search', 'Admin\CoursesController@search')->name('courses.search');
// admin/courses/edit' .$crs->id
Route::get('admin/courses/edit/{id}', 'Admin\CoursesController@edit')->name('courses.edit');
Route::post('admin/courses/update/{id}', 'Admin\CoursesController@update')->name('courses.update');

// admin/courses/delete' .$crs->id
Route::post('admin/courses/delete/{id}', 'Admin\CoursesController@destroy_undestroy')->name('courses.delete');




Route::post('user/courseregistered', 'Student\CourseRegistrationController@registeredsave')->name('user.courseregistered');



//////student dashboard 

Route::group(['prefix' => 'student'], function () {

    //'middleware' => 'student_auth',

    Route::get('/ebooks', 'Student\EbooksController@index')->name('student/ebooks');
    Route::get('/invoice', 'Student\InvoiceController@index')->name('student/invoice');
    Route::get('/makepayment', 'Student\MakePaymentController@index')->name('student/makepayment');
    Route::post('/myregstration', 'Student\MyRegstrationController@index')->name('student/myregstration');
    Route::get('/paymenthistory', 'Student\PaymentHistoryController@index')->name('student/paymenthistory');
    Route::get('/proceedpayment', 'Student\ProceedPaymentController@index')->name('student/proceedpayment');
    Route::get('/profile', 'Student\ProfileControlle@index')->name('student/profile');
    Route::get('/submitrequest', 'Student\SubmitRequestController@index')->name('student/submitrequest');
    Route::get('/viewticket', 'Student\ViewTicketController@index')->name('student/viewticket');

    Route::get('/dashboard', 'Student\DashboardController@dashboard')->name('student/dashboard');
});




Route::get('student/login', 'Student\StudentController@index');
Route::post('student/checklogin', 'Student\StudentController@checklogin');
Route::get('student/logout', 'Student\StudentController@logout')->name('logout');

Route::get('student/layouts', 'Student\BlogPageController@layouts')->name('student/layouts');
Route::get('student/blogpage', 'Student\BlogPageController@blogpage')->name('student/blogpage');
Route::get('student/changepassword', 'Student\ChangePasswordController@index')->name('student/changepassword');
Route::get('student/courseregistration', 'Student\CourseRegistrationController@index')->name('student/courseregistration');
///user/courseregistered
//////student//courselist
Route::get('student/courselist/{id}', 'Student\CourseRegistrationController@list')->name('student.courselist');
