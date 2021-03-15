<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\CourseRequest;
use App\Models\Courses;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{
    public function index(Request $request)
    {

        $user_id = Auth::id();

        // $course_pdf = Course_Registered::with('course')->where('user_id',$user_id)->get();
        $course_pdf = Courses::with(['requestCourse'=>function($q) use($user_id){
            $q->where('user_id',$user_id);
        }])->get();

        return view('studentdashboard.ebooks.index', compact('course_pdf'));
    }

    // route downloadpdf
    public function downloadRequest(Request $request)
    {
        $user_id = Auth::id();
        $course_request = new CourseRequest();
        $course_request->user_id = $user_id;
        $course_request->course_id = $request->course_id;
        $course_request->save();


        // return view('studentdashboard.ebooks.index');
        return  back()->with('success', 'Your course request is submited');
    }
}
