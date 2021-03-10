<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Courses;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function index()
    {

        return view('user.registration.index');
    }


    public function save(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        if (!$validation->fails()) {
            $student = new User();
            $this->add_or_update($student, $request);
            Auth::login($student);
            return redirect('student/dashboard');
        } else {

            return back()->with('error', 'Email already exsist');
        }
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
        $student_courses = Course_Registered::where('user_id', $student->id)->with('course')->get();
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
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => 2
        );

        if (Auth::attempt($user_data)) {
            return redirect('student/dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function logout()
    {

        Auth::logout();
        return redirect('student/login');
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
}
