<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function courseList(){

        $courses = Courses::paginate(12);

        return view('user.courses.index',compact('courses'));
    }
    public function courseDetail(Request $request){

        $course_detail = Courses::with('chapters')->find($request->course_id);

        return view('user.courses.detail',compact('course_detail'));
    }

    public function registerCourse(Request $request){


        $user= Auth::user();
        $register_course = new Course_Registered();
        $register_course->course_id = $request->course_id ;
        $register_course->user_id = $user->id ;
        $register_course->name = $request->name ;
        $register_course->save();

        return redirect('student/dashboard') ;
        
    }
}
