<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course_Registered;
use App\Models\user_registered;
use App\Models\Courses;
use App\User;
use Illuminate\Support\Facades\Auth;

class CourseRegistrationController extends Controller
{
    function index()
    {

        $courses = Courses::paginate(10);
        $userlist = User::where('role_id',2)->get();
        $currentURL = url()->current();
        // dd($courses);
        return view('studentdashboard.courseregistration.index',compact('courses'));

}


 function registeredsave(Request $request){
// dd($request->all());
    $user_id = Auth::id();
    $registered = new Course_Registered();
    $registered->name = $request->coursedrop;
    $registered->user_id = $user_id;

    $registered->save();

    return Redirect('student/makepayment');

}


public function list($id){

//  dd($id);
    $registered = Course_Registered::where('user_id',$id)->get();
    // $userlist = user_registered::find($id);

    // dd($registered);
    return view('user.registeredlist.index',compact('registered'));

    }



}
