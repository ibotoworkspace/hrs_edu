<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizControlller extends Controller
{
    public function quiz(Request $request)
    {
        return $quiz=Quiz::with('choice')->where('course_id',$request->course_id)->paginate(1);
    }
}
