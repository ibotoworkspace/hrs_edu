<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmitRequestController extends Controller
{
    function index()
    {
      
 
        // $blogpage = BlogPage::paginate(10);
       
        return view('studentdashboard.submitrequest.index');
    
}


}
