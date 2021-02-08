<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function index()
    {
      
 
        // $invoice = BlogPage::paginate(10);
       
        return view('studentdashboard.invoice.index');
    
}


}
