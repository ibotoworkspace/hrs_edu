<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    
    public function contactus(){

    $contactus = ContactUs::paginate(10);

// dd($contactus);

             return view('user.contactus.index', compact('contactus'));
    
    
    
            
         }
    
    
    
    
    
}
