<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Course_Video;
use App\Models\CourseRequest;
use App\Models\Courses;
use App\Models\Lecturer;
use App\Models\PromoCode;
use App\Models\Chapter;
use App\Models\Ebooks;
use App\Models\Test_result;
use App\Models\Quiz;
use App\Models\SkillAdvisor;
use App\Models\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminController extends Controller
{
    function index()
    {
        return view('login.login');
    }


    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => 1
        );

        if (Auth::attempt($user_data)) {
            return redirect('admin/dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }



    function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }


    function dashboard()
    {

        $admin_common = new \stdClass();
        $admin_dashboard = $this->admin_dashboard();
        $courses = Courses::paginate(10);
        $modules = $admin_dashboard['modules'];
        $reports = $admin_dashboard['reports'];

        $admin_common->id = '1';
        $admin_common->modules = $modules;
        $admin_common->reports = $reports;
        $admin_common->name = 'Admin';
        $admin_common->courses_list = $courses;

        $chart = $admin_dashboard['chart'];

        session(['admin_common' => $admin_common]);
        return view('layouts.default_dashboard', compact(
            'chart'
        ));
    }
    public function admin_dashboard()
    {
        $total_count = Courses::count('id');
        $active_count = Courses::count('id'); // where is_active == 1
        $modules[] = [

            'url' => 'admin/courses',
            'title' => 'Total Courses',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-20.png',
            'background-color'=>'grey',


        ];
        $total_count = User::where('role_id', 2)->count('id');
        $active_count = User::where('role_id', 2)->count('id'); // where is_active == 1
        $modules[] = [

            'url' => 'user/list',
            'title' => 'Total User',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-21.png',
            'background-color'=>'pink',


        ];

        $total_count = Quiz::wherehas('course')->count('id');
        $active_count = $total_count;
        $modules[] = [

            'url' => 'admin/courses',
            'title' => 'Total Quizzes',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-22.png',
            'background-color'=>'lightblue',


        ];
        
        $total_count = Course_Video::wherehas('course')->count('id');
        $active_count = $total_count; // where is_active == 1
        $modules[] = [

            'url' => 'admin/courses',
            'title' => 'Total Videos',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-23.png',
            'background-color'=>'red',


        ];
        $total_count = PromoCode::count('id');
        $active_count = PromoCode::count('id'); // where is_active == 1
        $modules[] = [

            'url' => 'admin/newpromocode',
            'title' => 'Promo code',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-24.png',
            'background-color'=>'orange',


        ];
        $modules[] = [

            'url' => 'admin/listoforder',
            'title' => 'Order',
            'total' => '3',
            'active' => '5',
            'image' => 'images/icon-25.png',
            'background-color'=>'green',


        ];
        $total_count = Lecturer::count('id');
        $active_count = $total_count;
        $modules[] = [

            'url' => 'admin/lecturer',
            'title' => 'Total Lecturer',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-26.png',
            'background-color'=>'brown',


        ];
        $total_count = SkillAdvisor::count('id');
        $active_count = SkillAdvisor::where('status','approved')->count('id'); // where is_active == 1
        $modules[] = [

            'url' => 'admin/skilladvisor',
            'title' => 'Total Skills Advisor',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-26.png',
            'background-color'=>'orange',


        ];

        $total_count = Blog::count('id');
        $modules[] = [

            'url' => 'admin/addblog',
            'title' => 'Add Blog',
            'total' => $total_count,
            'active' => $total_count,
            'image' => 'images/icon-20.png',
            'background-color'=>'purple',


        ];
        $total_test = Test::count('id');
        $modules[] = [

            'url' => 'admin/test',
            'title' => 'Test',
            'total' => $total_test,
            'active' => $total_test,
            'image' => 'images/icon-20.png',
            'background-color'=>'blue',


        ];

        $test_result = Test_result::count('id');
        $modules[] = [

            'url' => 'admin/test_result',
            'title' => 'Test Result',
            'total' => $test_result,
            'active' => $test_result,
            'image' => 'images/icon-20.png',
            'background-color'=>'green',


        ];
        $total_count = CourseRequest::count('id');
        $modules[] = [

            'url' => 'admin/reports/courserequest',
            'title' => 'Request For Course PDF',
            'total' => $total_count,
            'active' => $total_count,
            'image' => 'images/icon-20.png',
            'background-color'=>'red',


        ];
        $total_count = Ebooks::count('id');
        $active_count = Ebooks::count('id'); // where is_active == 1
        $modules[] = [

            'url' => 'admin/ebooks',
            'title' => 'EBooks',
            'total' => $total_count,
            'active' => $active_count,
            'image' => 'images/icon-22.png',
            'background-color'=>'pink',


        ];

        $myvar = [];
        $myvar['modules'] = $modules;
        $myvar['reports'] = [];
        $myvar['chart'] = [];

        return $myvar;
    }
}
