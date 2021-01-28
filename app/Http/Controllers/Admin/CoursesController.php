<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function list()
    {
        return view('admin.courses.index');
    }

    function ListofCourses()
    {
        return view('admin.ListofCourses.index');
    }
    function Listofquiz()
    {
        return view('admin.Listofquiz.index');
    }


    function  addmaincourse()
    {
        return view('admin.addmaincourse.index');
    }
        function  newquizquestion()
        {
            return view('admin.newquizquestion.index');
        }
  

     
        function  listofpromocode()
        {
            return view('admin.listofpromocode.index');
        }
  

        function  listoforder()
        {
            return view('admin.listoforder.index');
        }
  

        function  listofmembership()
        {
            return view('admin.listofmembership.index');
        }
  

        function  ticket()
        {
            return view('admin.ticket.index');
        }
        

        function  newpromocode()
        {
            return view('admin.newpromocode.index');
        }

   
        function    userperformance()
        {
            return view('admin.userperformance.index');
        }

}
