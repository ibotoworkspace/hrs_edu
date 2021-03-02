<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function registerCourse(Request $request)
    {

        $method = $request->method();

        if ($method == 'POST') {
            $course= Courses::find($request->course_id);
            $user_id = Auth::id();
            $register_course = new Course_Registered();
            $register_course->course_id = $request->course_id;
            $register_course->name = $course->title;
            $register_course->user_id = $user_id;
            $register_course->save();
            // return redirect('student/courseregistration');
            return Redirect('student/makepayment');

        } else {
            $courses = Courses::get();
            return view('studentdashboard.courseregistration.index', compact('courses'));
        }
    }

    public function index(){

        $user_id = Auth::id();
        $register_courses = Course_Registered::with('course')->where('user_id', $user_id)->get();
        return view('studentdashboard.course.index', compact('register_courses'));

    }
}
