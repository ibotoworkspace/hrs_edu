<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course_Registered;
use App\models\user_registered;
use App\User;
use Illuminate\Support\Facades\Auth;

class CourseRegistrationController extends Controller
{
    function index()
    {
      
 
        $userlist = User::where('role_id',2)->get();
        // dd($userlist);
        return view('studentdashboard.courseregistration.index');
    
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
