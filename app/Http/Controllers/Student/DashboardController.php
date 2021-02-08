<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
      
 
        // $blogpage = BlogPage::paginate(10);
       
        return view('studentdashboard.dashboard.index');
        
    
}


}
