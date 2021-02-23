<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SkillAdvisor;
use App\User;
use Illuminate\Support\Facades\Config;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;

class SkillAdvisorController extends Controller
{






    ///////////
    function index()
    {
      
 
    $userskill = SkillAdvisor::paginate(10);
   
    return view('user.advisor.index', compact('userskill'));

}

public function status_update(Request $request, $id)
    {
        dd($request->all());
        // $userskill = SkillAdvisor::paginate(10);
        $userskill = SkillAdvisor::find($id);
        $userskill->status = $request->status;
        $userskill->save();

        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.update'),
            'new_value' => ucwords($request->status)
        ]);
        return $response;
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

public function list(){

    // $all = Config::get('constants.order_status.all');
        $pending = Config::get('constants.order_status.pending');
        // $inprogress = Config::get('constants.order_status.inprogress');
        // $completed = Config::get('constants.order_status.completed');
        $rejected = Config::get('constants.order_status.rejected');


    $advisor = SkillAdvisor::paginate(10);

    return view('user.advisor.index',compact('advisor'));
}



// public function Request(){


//     // $advisor = User::where('role_id',3)->paginate(10);

//     return view('user.advisor_request.index');
// }



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


public function search(Request $request)

{


   
// dd($request->all());
       $name = $request->name ?? '';
       // dd($name);
       $advisor = SkillAdvisor::where('name', 'like', '%' . $name . '%')->paginate(10);     
       return view('user.advisor.index', compact('advisor','name'));

   }




}
