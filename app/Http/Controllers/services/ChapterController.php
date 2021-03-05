<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ChapterController extends Controller
{
    public function getChapter(Request $request){
        try {
            $courses = Courses::with(['chapters'])->find($request->course_id);

            return $this->sendResponse(200, $courses);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
}
