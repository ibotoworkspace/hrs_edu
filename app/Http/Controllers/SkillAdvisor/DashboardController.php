<?php

namespace App\Http\Controllers\SkillAdvisor;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_admin = Auth::user();
        $skilladvisor = $user_admin->skilladvisor;

        $skilladvisor_common = new \stdClass();
        $skilladvisor_common->skilladvisor = $user_admin;

        session(['skilladvisor_common' => $skilladvisor_common]);
        $users = $skilladvisor->registered_students;

        return view('skilladvisor.dashboard.index', compact('users'));
    }
    public function updateProfile(Request $request)
    {
        $user_id = Auth::id();
        $lecturer = User::find($user_id);
        $lecturer->name = $request->name;
        $lecturer->mobileno = $request->phone;
        $lecturer->address =  $request->address;
        $lecturer->region =  $request->region;


        if ($request->hasFile('upload_image')) {
            $avatar = $request->upload_image;
            $root = $request->root();
            $lecturer->avatar = $this->move_img_get_path($avatar, $root, 'user_profile');
        }
        $lecturer->save();
        return redirect('skilladvisor/dashboard')->with('success', 'Profile update successfully');
    }
    public function profile()
    {
        $student = Auth::user();
        $student_common = new \stdClass();
        $student_common->student = $student;

        session(['student_common' => $student_common]);

        return view('skilladvisor.profile.index');
    }
     public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
