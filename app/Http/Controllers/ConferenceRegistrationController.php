<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferenceRegistrationController extends Controller
{
    public function index()
    {
        return view('conference.cybersecurity');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'other_names' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:conference_registrations,email',
            'your_conference_interest' => 'required|string|max:255',
        ]);

        ConferenceRegistration::create($request->all());

        return redirect()->back()->with('success', 'Registration successful!');
    }
}
