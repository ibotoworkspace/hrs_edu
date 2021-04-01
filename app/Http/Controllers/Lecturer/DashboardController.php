<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $lecturer = Auth::user();
        $lecturer_common = new \stdClass();
        $lecturer_common->name = $lecturer->name;

        session(['lecturer_common' => $lecturer_common]);


        $groups = Group::whereHas('lecturer', function ($q) use ($lecturer) {
            $q->where('user_id', $lecturer->id);
        })->with('course')->paginate(10);

        return view('lecturer.dashboard.index', compact('groups'));
    }
    public function profile()
    {

        return view('lecturer.profile.index');
    }
    public function updateProfile()
    {

        return view('lecturer.profile.index');
    }
}
