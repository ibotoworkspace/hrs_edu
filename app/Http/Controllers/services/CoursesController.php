<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course_Registered;
use App\Models\Course_Video;
use App\Models\Courses;
use App\Models\Quiz;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CoursesController extends Controller
{
    public function registeredcourses(Request $request)
    {
        try {
            $header = $request->header('authorization-secure') ?? $request->header('Authorization-secure');
            $user = User::where('access_token', $header)->first();
            $items_count = $request->items_count ?? '20';
            $registred_courses = Course_Registered::where('user_id', $user->id)
                ->wherehas('course')
                // ->with('course.chapters', 'course.videos')
                ->orderBy('created_at', 'desc')->paginate($items_count);

            return $this->sendResponse(200, $registred_courses);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
    public function myCourse(Request $request)
    {
        try {
            $header = $request->header('authorization-secure') ?? $request->header('Authorization-secure');
            $user = User::where('access_token', $header)->first();
            $items_count = $request->items_count ?? '20';
            $registred_courses = Course_Registered::with('course.chapters', 'course.videos')->where('user_id', $user->id)->where('is_paid', 1)->orderBy('created_at', 'desc')->paginate($items_count);

            return $this->sendResponse(200, $registred_courses);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
    public function chapters(Request $request)
    {
        try {
            $chapters = Chapter::where('course_id', $request->course_id)->get();

            return $this->sendResponse(200, $chapters);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
    public function chapter(Request $request)
    {

        try {
            $chapter = Chapter::where('id', $request->chapter_id)->get();

            return $this->sendResponse(200, $chapter);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
    public function Videos(Request $request)
    {
        try {
            $videos = Course_Video::with('videos')->where('id', 1)->get();

            return $this->sendResponse(200, $videos);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
    public function quiz(Request $request)
    {
        try {
            $quiz = Quiz::with('quizes')->where('course_id', $request->course_id)->get();

            return $this->sendResponse(200, $quiz);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }

    public function register(Request $request)
    {

        try {
            $header = $request->header('authorization-secure') ?? $request->header('Authorization-secure');
            $user = User::where('access_token', $header)->first();
            $user_course = Course_Registered::where('course_id', $request->course_id)->where('user_id', $user->id)->first();
            if ($user_course) {
                return $this->sendResponse(200, 'Course Is Already Registered');
            } else {
                $registration = new Course_Registered();
                $registration->course_id =  $request->course_id;
                $registration->user_id =  $user->id;
                $registration->name = $request->course_name;
                $registration->save();

                return $this->sendResponse(200, 'Course Registered Successfully ');
            }
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
}
