<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SkillAdvisor;

class SkillAdvisorController extends Controller
{
    function index()
    {
      
 
    $userskill = SkillAdvisor::paginate(10);
   
    return view('user.skilladvisor.index', compact('userskill'));

}

// public function create()
// {
//     $control = 'create';
   
  

//     return \View::make(
//         'user.skilladvisor.create',
//         compact('control')
//     );
// }


public function save(Request $request)
{
  
    $request->validate([
      'password' => 'required|confirmed'
    ]);

    $userskill = new SkillAdvisor();
    // $coursesvideos->course_id = $request->course_id;


    $this->add_or_update($request , $userskill);
// dd("save");
    // return $this->index($request->course_id);
    return redirect('user/skilladvisor/');
}





public function add_or_update($request, $userskill)
{       

    // dd($request);
    
    $userskill->name = $request->firstname;
    $userskill->lastname = $request->last;
    $userskill->email  = $request->email;
    $userskill->phone_no = $request->phone;
    $userskill->password = $request->password;
    $userskill->confirm_password = $request->confirm_password;

  
    
    
    $userskill->save();
  
    return redirect()->back();

}






}
