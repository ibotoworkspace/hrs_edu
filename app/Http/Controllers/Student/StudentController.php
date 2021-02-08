<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function blogpage()
    {
      
 
        // $blogpage = BlogPage::paginate(10);
       
        return view('studentdashboard.blogpage.index');
    
}


}
