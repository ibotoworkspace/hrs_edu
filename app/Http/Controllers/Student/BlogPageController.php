<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

class BlogPageController extends Controller
{
      function blogpage()
    {
      
 
        // $blogpage = BlogPage::paginate(10);
       
        return view('studentdashboard.blogpage.index');
    
}




function layouts()
{
  

   
    return view('studentdashboard.layouts.index');

}







}