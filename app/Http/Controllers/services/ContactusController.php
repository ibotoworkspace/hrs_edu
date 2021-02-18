<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactus(Request $request)
    {
        $contact=new ContactUs;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->comment=$request->comment;
        $contact->phone_no=$request->phoneno;
        $contact->Save();
        return $this->sendResponse(200, 'your message send successfully!');
    }
}
