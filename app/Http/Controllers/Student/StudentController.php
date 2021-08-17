<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Courses;
use App\Models\Lecturer;
use App\Models\SkillAdvisor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    function blogpage()
    {


        // $blogpage = BlogPage::paginate(10);

        return view('studentdashboard.blogpage.index');
    }

    function login()
    {
        return view('studentdashboard.login.index');
    }
    public function index(Request $request)
    {

        $registration_code = $request->registration_code;
        return view('user.registration.index',compact('registration_code'));
    }


    public function save(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $user = new User();
        if (!$validation->fails()) {
            if ($request->role_id == Config::get('constants.role_id.lecturer')) {
                $this->add_lecturer($user, $request);
                return back()->with('success', 'Thank You For Registration , Your account is in verification process');
            } else {
                if($request->registration_code){
                    $sda = SkillAdvisor::where('registration_code',$request->registration_code)->first();
                    $user->sda_id = $sda->id;
                }
                $this->add_or_update($user, $request);
                Auth::login($user);
                return redirect('student/dashboard');
            }
        } else {

            return back()->with('error', 'Email already exsist');
        }
    }
    public function add_lecturer($user, $request)
    {
        if ($request->name) {
            $user->name = $request->name;
        }
        if ($request->address) {
            $user->address = $request->address;
        }
        $user->email = $request->email;
        if ($request->phone) {
            $user->mobileno = $request->phone;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->role_id = Config::get('constants.role_id.lecturer');

        $user->access_token = uniqid();
        $user->save();

        $lecturer = new Lecturer();
        $lecturer->user_id = $user->id;
        $lecturer->save();
    }

    public function add_or_update($student, $request)
    {
        $student_role_id = 2;
        if ($request->name) {
            $student->name = $request->name;
        }
        if ($request->address) {
            $student->address = $request->address;
        }
        $student->email = $request->email;
        if ($request->phone) {
            $student->mobileno = $request->phone;
        }
        if ($request->password) {
            $student->password = Hash::make($request->password);
        }
        // if ($request->region) {
        //     $student->password = $request->region;
        // }
        $student->access_token = uniqid();

        $student->role_id = $student_role_id;

        if ($request->hasFile('upload_image')) {
            $avatar = $request->upload_image;
            $root = $request->root();
            $student->avatar = $this->move_img_get_path($avatar, $root, 'user_profile');
        }
        $student->save();
    }

    function dashboard()
    {
        $student = Auth::user();
        $student_courses = Course_Registered::wherehas('course')->where('user_id', $student->id)->with('course.test')->get();
        $student_common = new \stdClass();
        $student_common->student = $student;
        $student_common->courses = $student_courses;

        session(['student_common' => $student_common]);

        return view('studentdashboard.dashboard.index');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
        );

        if (Auth::attempt($user_data)) {

            $user = User::where('email', $user_data['email'])->first();
           
            if ($user->role_id == Config::get('constants.role_id.student')) {
                return redirect('student/dashboard');
            } elseif ($user->role_id == Config::get('constants.role_id.skilladvisor')) {
                // dd($user);
                $skilladvisor = SkillAdvisor::where('user_id', $user->id)->where('status', 'approved')->first();
                if ($skilladvisor) {
                    Auth::login($user);
                    return redirect('skilladvisor/dashboard');
                } else {
                    return back()->with('error', 'Your profile is under verification .');
                }
            } elseif ($user->role_id == Config::get('constants.role_id.lecturer')) {
                $lecturer = Lecturer::where('user_id', $user->id)->where('is_approve', 1)->first();
                if ($lecturer) {
                    return redirect('lecturer/dashboard');
                } else {
                    return back()->with('error', 'Wrong Login Details');
                }
            } else {
                return back()->with('error', 'Wrong Login Details');
            }
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function logout()
    {

        Auth::logout();
        return redirect('login');
    }
    function update_profile(Request $request)
    {

        $user_id = Auth::id();
        $student = User::find($user_id);
        $this->add_or_update($student, $request);

        return redirect('student/profile')->with('success', 'Profile update successfully');
    }
    function profile()
    {
        $student = Auth::user();
        $student_common = new \stdClass();
        $student_common->student = $student;

        session(['student_common' => $student_common]);

        return view('studentdashboard.profile.index');
    }

    public function forgetPassword(Request $request)
    {


        $user_detail = Auth::user();
        $user = User::find($user_detail->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'your password has been reset');
    }

    public function Library(Request $request)
    {

        return view('studentdashboard.ebooks.index');
    }
}
