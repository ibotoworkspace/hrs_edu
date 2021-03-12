<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{

    public function contactus()
    {

        return view('user.contactus.index');
    }
    public function submitForm(Request $request)
    {

        $contact_us = new ContactUs();
        $contact_us->name = $request->name;
        $contact_us->email = $request->email;
        $contact_us->subject = $request->subject;
        $contact_us->comment = $request->comment;
        $contact_us->phone_no = $request->phone_no;
        $contact_us->save();

        return redirect()->back()->with('success', 'Thank you for getting in touch!');
    }
}
