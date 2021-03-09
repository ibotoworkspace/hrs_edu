<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class QuizControlller extends Controller
{
    public function quiz(Request $request)
    {
        try {
            $quiz = Quiz::with('choice')->where('course_id', $request->course_id)->paginate(1);

            return $this->sendResponse(200, $quiz);
        } catch (\Exception $e) {
            return $e ;
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
}
