<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Courses;
use App\Models\Quiz;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function registeredcourses(Request $request)
    {
        return $courses=Courses::orderBy('created_at','desc')->get();
    }
    public function chapters(Request $request)
    {
        return $chapters=Chapter::where('course_id',$request->course_id)->get();
    }
    public function chapter(Request $request)
    {
        return $chapter=Chapter::where('id',$request->chapter_id)->get();
    }
    public function Videos(Request $request)
    {
        return $videos=Courses::with('videos')->where('id',$request->course_id)->get();
    }
    public function quiz(Request $request)
    {
       
        return $quiz=Quiz::with('quizes')->where('course_id',$request->course_id)->get();
    }
}
