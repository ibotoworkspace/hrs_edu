<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EbooksController extends Controller
{
    function index()
    {
      
 
        // $ebooks = BlogPage::paginate(10);
       
        return view('studentdashboard.ebooks.index');
    
}


}
