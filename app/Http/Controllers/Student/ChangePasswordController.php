<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
      function index()
    {
      
 
        // $changepasword = BlogPage::paginate(10);
       
        return view('studentdashboard.changepassword.index');
    
}


}
