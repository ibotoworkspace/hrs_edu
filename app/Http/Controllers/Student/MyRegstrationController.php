<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Courses;
// use App\models\Courses;

class MyRegstrationController extends Controller
{
    function index(Request $request)
    {
    //   dd($request->all());
 
        $courses = Courses::paginate(10);
    //    dd($courses);
         return view('studentdashboard.myregstration.index',compact('courses'));
    
}

}
