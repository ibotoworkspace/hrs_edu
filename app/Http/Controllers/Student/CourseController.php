<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
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
            $course = Courses::find($request->course_id);
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

    public function index(Request $request)
    {

        $user_id = Auth::id();
        $register_courses = Course_Registered::with('course')->where('user_id', $user_id)->where('is_paid', 1)->get();
        return view('studentdashboard.course.index', compact('register_courses'));
    }

    public function courseDetail (Request $request){

        $course_id = decrypt($request->course_id);

        $course_detail = Courses::with('chapters','videos','registerCourse')->find($course_id);


        return view('studentdashboard.course.detail', compact('course_detail')); 
    }


    public function readChapter(Request $request){

        $chapter = Chapter::find($request->chap_id);

        return view('studentdashboard.course.readchapter', compact('chapter'));

    }

    public function courseBadge(Request $request){

        $course_reg = Course_Registered::find($request->course_id);
        $course_reg->is_completed= 1 ;
        $course_reg->save();

        $response = array(
            'status' => 'success',
            'msg' => $course_reg,
        );

        return $response ;
    }
}
