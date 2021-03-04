<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Course_Video;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class VideoController extends Controller
{
    public function coursevideos(Request $request)
    {
        try {
            $video = Course_Video::where('course_id', $request->course_id)->get();

            return $this->sendResponse(200, $video);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
}
