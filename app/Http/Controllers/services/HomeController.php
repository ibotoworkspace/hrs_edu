<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return $courses=Courses::orderBy('created_at','desc')->get();
    }
}
