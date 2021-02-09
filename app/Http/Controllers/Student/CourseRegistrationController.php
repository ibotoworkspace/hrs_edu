<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    function index()
    {
      
 
        // $courseregistration = BlogPage::paginate(10);
       
        return view('studentdashboard.courseregistration.index');
    
}


}
