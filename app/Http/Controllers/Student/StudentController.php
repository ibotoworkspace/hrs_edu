<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    function blogpage()
    {


        // $blogpage = BlogPage::paginate(10);

        return view('studentdashboard.blogpage.index');
    }

    function index()
    {
        return view('studentdashboard.login.index');
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
}
