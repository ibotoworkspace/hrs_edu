<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\Blog;

class BlogPageController extends Controller
{
      function blogpage()
    {


        $blogpage = Blog::paginate(10);
        // dd( 'sadada');

        return view('studentdashboard.blogpage.index',compact('blogpage'));

}




function layouts()
{



    return view('studentdashboard.layouts.index');

}







}
