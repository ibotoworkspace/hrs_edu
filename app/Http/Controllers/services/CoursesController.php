<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course_Video;
use App\Models\Courses;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CoursesController extends Controller
{
    public function registeredcourses(Request $request)
    {
        try {
            $items_count = $request->items_count ?? '20';
            $courses = Courses::with(['chapters', 'videos'])->orderBy('created_at', 'desc')->paginate($items_count);

            // $courses->transform(function ($course) {
            //     $course->chapters = count($course->chapters);
            //     // return $course;
            // })->paginate(10);

            return $this->sendResponse(200, $courses);
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
}
