<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Course_Video;
use App\Models\Courses;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function coursevideos(Request $request)
    {
       
       return $video=Course_Video::where('course_id',$request->course_id)->get();
    }
}
