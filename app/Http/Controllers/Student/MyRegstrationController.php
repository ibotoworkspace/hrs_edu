<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyRegstrationController extends Controller
{
    function index()
    {
      
 
        // $blogpage = BlogPage::paginate(10);
       
        return view('studentdashboard.myregstration.index');
    
}


}
