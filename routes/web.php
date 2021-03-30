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

Route::post('student/paymentmethood', 'Student\PaymentController@paymentMethod');
Route::get('user/aboutus', 'User\UserController@aboutUs');


//                           *********************** ADMIN ROUTE START ****************************

Route::get('admin/login', 'Admin\AdminController@index');
Route::post('admin/checklogin', 'Admin\AdminController@checklogin');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('logout');

Route::get('admin/mailCheck', 'Admin\Report\UserController@mailCheck')->name('mailCheck');

Route::group(['middleware' => 'admin_auth', 'prefix' => 'admin'], function () {

    Route::get('user/request/csv', 'Admin\Report\UserController@index_csv')->name('user.request.csv');
    Route::get('user/request/excel', 'Admin\Report\UserController@index_excel')->name('user.request.excel');
    Route::get('user/request/pdf', 'Admin\Report\UserController@generatePDF')->name('user.request.pdf');

    Route::get('ticket/csv', 'Admin\TicketController@index_csv')->name('ticket.csv');
    Route::get('ticket/excel', 'Admin\TicketController@index_excel')->name('ticket.excel');
    Route::get('ticket/pdf', 'Admin\TicketController@generatePDF')->name('ticket.pdf');

    Route::get('order/csv', 'Admin\OrderController@index_csv')->name('order.csv');
    Route::get('order/excel', 'Admin\OrderController@index_excel')->name('order.excel');
    Route::get('order/pdf', 'Admin\OrderController@generatePDF')->name('order.pdf');

    Route::get('group/csv', 'Admin\GroupController@index_csv')->name('group.csv');
    Route::get('group/excel', 'Admin\GroupController@index_excel')->name('group.excel');
    Route::get('group/pdf', 'Admin\GroupController@generatePDF')->name('group.pdf');

    Route::get('promo/csv', 'Admin\PromoCodeController@index_csv')->name('promo.csv');
    Route::get('promo/excel', 'Admin\PromoCodeController@index_excel')->name('promo.excel');
    Route::get('promo/pdf', 'Admin\PromoCodeController@generatePDF')->name('promo.pdf');

    // course export files 
    Route::get('course/csv', 'Admin\CoursesController@index_csv')->name('group.csv');
    Route::get('course/excel', 'Admin\CoursesController@index_excel')->name('group.excel');
    Route::get('course/pdf', 'Admin\CoursesController@generatePDF')->name('group.pdf');

    // REPORTS 

    Route::get('/report/course', 'Admin\Report\CourseController@index')->name('report.course');
    Route::get('/report/user', 'Admin\Report\UserController@index')->name('report.course');
    Route::get('/report/user/certificate/{id}/{user_id}', 'Admin\Report\UserController@certificate')->name('report.course');
    Route::get('/report/user/badge/{id}', 'Admin\Report\UserController@badge')->name('report.badge');
    Route::get('/report/user/voucher/{id}/{user_id}', 'Admin\Report\VoucherController@index')->name('report.voucher');
    Route::post('/report/user/voucher/save', 'Admin\Report\VoucherController@save')->name('admin.voucher.save');


    Route::get('/discussion/{id}', 'Admin\GroupController@chatList')->name('discussion');
    Route::get('/addcomment', 'Admin\GroupController@addComment')->name('addcomment');
    Route::post('chat/send/{group_id}', 'Admin\GroupController@send')->name('chat.send');
    Route::get('chat/latestchat', 'Admin\GroupController@latestChat')->name('chat.latestchat');

    Route::get('/group/statusupdate/{id}', 'Admin\GroupController@statusUpdate')->name('group.statusupdate');
    Route::get('/creategroup', 'Admin\GroupController@create')->name('group.create');
    Route::post('/savegroup', 'Admin\GroupController@save')->name('group.save');
    Route::get('/group', 'Admin\GroupController@index')->name('group');

    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    // Add BLog
    Route::get('/addblog', 'Admin\BlogController@index')->name('addblog');
    Route::post('/saveblog', 'Admin\BlogController@save')->name('saveblog');

    //     Route::get('admin/courses', 'Admin\CoursesController@list')->name('admin/courses');

    Route::get('/listofcourses', 'Admin\CoursesController@listofcourses')->name('admin/listofcourses');
    Route::get('/course/delete/{id}', 'Admin\CoursesController@destroy_undestroy')->name('course.delete');

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

    Route::get('/listoforder', 'Admin\OrderController@index')->name('admin/listofpromocode');
    Route::get('/listofmembership', 'Admin\CoursesController@listofmembership')->name('admin/listofpromocode');

    Route::get('/ticket', 'Admin\TicketController@ticket')->name('admin/ticket');
    Route::get('/ticketstatus/{id}', 'Admin\TicketController@status')->name('ticket.status');
    Route::get('/newpromocode', 'Admin\CoursesController@newpromocode')->name('admin/newpromocode');

    Route::get('/userperformance', 'Admin\CoursesController@userperformance')->name('admin/userperformance');
    // admin/choices
    Route::get('/choices/{id}', 'Admin\ChoiceController@index')->name('admin.choices');
    Route::get('/choices', 'Admin\ChoiceController@index')->name('admin.choices');

    Route::get('/courserequest', 'Admin\CoursesController@courseRequest')->name('admin.courserequest');
    Route::get('/coursesrequest/status/{id}', 'Admin\CoursesController@status')->name('coursesrequest.status');

    //admin advisor
    Route::get('/advisor', 'Admin\SkillAdvisorController@index')->name('advisor');
    Route::get('/advisorstatus/{id}', 'Admin\SkillAdvisorController@updateStatus')->name('advisorstatus');
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


//                            *********************** ADMIN ROUTE END ****************************


//                              *********************** USER ROUTE START ****************************

Route::group(['prefix' => 'user'], function () {


    Route::get('/courses', 'User\CourseController@courseList')->name('user.courses');
    Route::get('/coursedetail', 'User\CourseController@courseDetail')->name('user.detail');

    Route::get('/courseregister', 'User\CourseController@registerCourse')->name('user.courseregister');
    Route::get('user/index', 'User\UserController@index')->name('user/index');
    Route::get('/aboutus', 'User\UserController@about')->name('user/about');

    Route::get('/career', 'User\UserController@career')->name('user/career');

    Route::get('/certificate', 'User\UserController@certificate')->name('user.certificate');
    Route::get('/contactus', 'User\ContactUsController@contactus')->name('user.contactus');
    Route::post('/contactform', 'User\ContactUsController@submitForm')->name('user.contactform');
    Route::get('/contentwriter', 'User\UserController@contentwriter')->name('user.contentwriter');
    Route::get('/coprate', 'User\UserController@coprate')->name('user/coprate');
    Route::get('/designer', 'User\UserController@designer')->name('user/designer');
    Route::get('/home', 'User\UserController@home')->name('user.home');
    Route::get('/userscore', 'User\UserScoreController@userscore')->name('user/userscore');
    ////////user login

    Route::post('/checklogin', 'User\UserController@checklogin');
    Route::get('/logout', 'User\UserController@logout')->name('logout');
    Route::get('/learning', 'User\UserController@learning')->name('user/learning');
    // Route::get('user/makepayment', 'User\UserController@makepayment')->name('user/makepayment');
    // Route::get('user/myregstration', 'User\UserController@myregstration')->name('user/myregstration');
    Route::get('/phpdeveloper', 'User\UserController@phpdeveloper')->name('user/phpdeveloper');

    /////user/registration

    Route::get('/list', 'User\StudentRegistrationController@list')->name('user.list');
    ////////userlist.search
    Route::get('/list/search', 'User\StudentRegistrationController@search')->name('userlist.search');



    Route::get('privacy&policy', 'User\UserController@privacyAndPolicy')->name('privacy');
    Route::get('terms&condition', 'User\UserController@termsAndCondition')->name('privacy');
    Route::get('/resource', 'User\UserController@resourse')->name('user/resourse');
    Route::get('/resource', 'User\UserController@resourse')->name('user/resourse');

    Route::match(['get', 'post'], 'add/skilladvisor', 'User\SkillAdvisorController@add')->name('add.skilladvisor');

    // Route::get('/skilladvisor', 'User\SkillAdvisorController@index')->name('user/skilladvisor');
    // Route::get('/advisorlist', 'User\SkillAdvisorController@list')->name('user/advisorlist');
    // Route::post('/advisor/status_update/{id}', 'User\SkillAdvisorController@status_update')->name('advisor.status_update');
});
// Route::get('advisor/search', 'User\SkillAdvisorController@search')->name('advisor.search');

// Route::get('userskill/create', 'User\SkillAdvisorController@create')->name('userskill.create');
// Route::post('userskill/save', 'User\SkillAdvisorController@save')->name('userskill.save');

Route::get('user/index', 'User\UserController@index')->name('user/index');
Route::get('admin/courses', 'Admin\CoursesController@index')->name('courses.index');
Route::get('admin/courses/create', 'Admin\CoursesController@create')->name('courses.create');
Route::post('admin/courses/save', 'Admin\CoursesController@save')->name('courses.save');

Route::get('courses/search', 'Admin\CoursesController@search')->name('courses.search');
Route::get('admin/courses/edit/{id}', 'Admin\CoursesController@edit')->name('courses.edit');
Route::post('admin/courses/update/{id}', 'Admin\CoursesController@update')->name('courses.update');

Route::post('admin/courses/delete/{id}', 'Admin\CoursesController@destroy_undestroy')->name('courses.delete');
Route::post('user/courseregistered', 'Student\CourseRegistrationController@registeredsave')->name('user.courseregistered');

//                              *********************** USER ROUTE END ****************************


//                              *********************** STUDENT ROUTE START ***********************

Route::get('student/registration', 'Student\StudentController@index')->name('student.registration');
Route::post('student/registration/save', 'Student\StudentController@save')->name('student.save');
Route::get('student/login', 'Student\StudentController@login');
Route::post('student/checklogin', 'Student\StudentController@checklogin');
Route::get('student/logout', 'Student\StudentController@logout')->name('logout');

Route::group(['middleware' => 'student_auth', 'prefix' => 'student'], function () {
    // request for certificate

    Route::post('certificate_req', 'Student\RequestController@certificateRequest')->name('certificate_req');
    Route::post('badge_req', 'Student\RequestController@badgeRequest')->name('badge_req');
    Route::post('voucher_req', 'Student\RequestController@voucherRequest')->name('voucher_req');

    // general discussion 
    Route::get('generaldiscussion', 'Student\CourseController@generalchatList')->name('discussion');
    Route::get('/generaladdcomment', 'Student\CourseController@generaladdComment')->name('addcomment');
    Route::post('chat/generalsend', 'Student\CourseController@generalsend')->name('chat.send');
    Route::get('chat/generallatestchat', 'Student\CourseController@generallatestChat')->name('chat.latestchat');

    // discussion against course 
    Route::get('course/discussion/{id}', 'Student\CourseController@chatList')->name('discussion');
    Route::get('/addcomment', 'Student\CourseController@addComment')->name('addcomment');
    Route::post('chat/send/{group_id}', 'Student\CourseController@send')->name('chat.send');
    Route::get('chat/latestchat', 'Student\CourseController@latestChat')->name('chat.latestchat');


    Route::post('/checkcode', 'Student\LibraryController@verifyCode')->name('checkcode');

    Route::get('/library', 'Student\LibraryController@index')->name('library');
    Route::post('/downloadpdf', 'Student\LibraryController@downloadRequest')->name('downloadpdf');


    Route::post('/applypromocode', 'Student\PaymentController@applyPromocode')->name('applypromocode');
    Route::post('/forgetpassword', 'Student\StudentController@forgetPassword')->name('forgetpassword');

    Route::post('/getpaymentdetail', 'Student\PaymentController@paymentDetail')->name('getpaymentdetail');

    Route::post('/profileupdate', 'Student\StudentController@update_profile')->name('profile.update');
    Route::get('/ebooks', 'Student\EbooksController@index')->name('student/ebooks');
    Route::get('/invoice', 'Student\InvoiceController@index')->name('student/invoice');
    Route::post('/makepayment', 'Student\PaymentController@make_payment')->name('student.makepayment');   // send course_id in request
    Route::get('/payment/detail', 'Student\PaymentController@details')->name('payment.detail');
    Route::get('/paymenthistory', 'Student\PaymentHistoryController@index')->name('student/paymenthistory');
    // Route::get('/proceedpayment', 'Student\ProceedPaymentController@index')->name('student/proceedpayment');

    Route::get('/stripepayment', 'Student\PaymentController@stripePayment')->name('stripepayment');
    Route::get('/paypalpayment', 'Student\PaymentController@payPal')->name('paypalpayment');
    Route::get('/profile', 'Student\StudentController@profile')->name('student/profile');
    // Route::get('/submitrequest', 'Student\SubmitRequestController@index')->name('student/submitrequest');
    Route::get('/viewticket', 'Student\ViewTicketController@index')->name('student.viewticket');

    Route::get('/dashboard', 'Student\StudentController@dashboard')->name('student.dashboard');

    Route::get('/ticket', 'Student\TicketController@index')->name('student.ticket');


    Route::match(['get', 'post'], 'ticket/add', 'Student\TicketController@add_ticket')->name('add.ticket');

    Route::get('/read/chapter', 'Student\CourseController@readChapter')->name('read.chapter');
    Route::get('/course/detail', 'Student\CourseController@courseDetail')->name('course.detail');
    Route::get('/mycourse', 'Student\CourseController@index')->name('student.mycourse');
    Route::post('/coursebadge', 'Student\CourseController@courseBadge')->name('student.mycourse');
    Route::match(['get', 'post'], '/courseregistration', 'Student\CourseController@registerCourse')->name('course.registration');

    // paypal route
    Route::get('payment', 'Student\PayPalController@payment')->name('payment');
    Route::get('cancel', 'Student\PayPalController@cancel')->name('payment.cancel');
    Route::get('payment/success', 'Student\PayPalController@success')->name('payment.success');
});


Route::get('student/layouts', 'Student\BlogPageController@layouts')->name('student/layouts');
Route::get('student/blogpage', 'Student\BlogPageController@blogpage')->name('student/blogpage');
Route::get('student/changepassword', 'Student\ChangePasswordController@index')->name('student/changepassword');
Route::get('student/courselist/{id}', 'Student\CourseRegistrationController@list')->name('student.courselist');

// student payment route 
Route::post('student/stripe', 'Student\PaymentController@stripePost')->name('stripe.post');
Route::get('/makepayment', 'Student\PaymentController@make_payment_app');


Route::get('group/pdf/sample', 'Admin\GroupController@PDF')->name('group.pdf');
