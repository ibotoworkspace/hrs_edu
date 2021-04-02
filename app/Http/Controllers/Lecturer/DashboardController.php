<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $lecturer = Auth::user();
        $lecturer_common = new \stdClass();
        $lecturer_common->lecturer = $lecturer;

        session(['lecturer_common' => $lecturer_common]);


        $groups = Group::whereHas('lecturer', function ($q) use ($lecturer) {
            $q->where('user_id', $lecturer->id);
        })->with('course')->paginate(10);

        return view('lecturer.dashboard.index', compact('groups'));
    }
    // public function profile()
    // {

    //     return view('lecturer.profile.index');
    // }
    // public function updateProfile()
    // {

    //     return view('lecturer.profile.index');
    // }

    public function update_profile(Request $request)
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
        return redirect('lecturer/dashboard')->with('success', 'Profile update successfully');
    }
    public function profile()
    {
        $student = Auth::user();
        $student_common = new \stdClass();
        $student_common->student = $student;

        session(['student_common' => $student_common]);

        return view('lecturer.profile.index');
    }
    public function forgetPassword(Request $request)
    {


        $user_detail = Auth::user();
        $user = User::find($user_detail->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'your password has been reset');
    }
    public function changePassword(){

        return view('lecturer.changepassword.index');
    }
    function logout()
    {

        Auth::logout();
        return redirect('login');
    }
}
