<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\CourseRequest;
use App\Models\Courses;
use App\Models\Ebooks;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LibraryController extends Controller
{
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $course_pdf = Ebooks::with(['requestCourse' => function ($q) use ($user_id) {
            $q->where('user_id', $user_id);
        }])->get();

        return view('studentdashboard.ebooks.index', compact('course_pdf'));
    }

    // route downloadpdf
    public function downloadRequest(Request $request)
    {
        $user_id = Auth::id();
        $course_request = new CourseRequest();
        $course_request->user_id = $user_id;
        $course_request->ebook_id = $request->ebook_id;
        $course_request->save();
        // return view('studentdashboard.ebooks.index');
        return  back()->with('success', 'Your course request is submited',);
    }

    public function verifyCode(Request $request)
    {
        $user_id = Auth::id();
        $request_course = CourseRequest::with('ebook')->where('download_code', $request->code)->where('is_expired', 0)->where('user_id', $user_id)->first();
// dd($request_course );
        if ($request_course) {
            $request_course->is_expired = 1;
            $request_course->save();

            $response = Response::json([
                "status" => true,
                'action' => 'success',
                'response' => $request_course
            ]);
        } else {

            $response = Response::json([
                "status" => true,
                'action' => 'failed',
                'response' => ''
            ]);
        }


        return $response;
    }
}
