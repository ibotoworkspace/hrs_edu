<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User_Registered;
use App\User;
use Illuminate\Support\Facades\Hash;

class StudentRegistrationController extends Controller
{


     public function index(){


        // $useregistered = User_Registered::paginate(10);
   
        return view('user.registration.index');
    }
    public function list(){


        $userlist = User::where('role_id',2)->paginate(10);
   
        return view('user.userlist.index',compact('userlist'));
    }




    public function save(Request $request){
 
        $useregistered = new User();

     $this->add_or_update($useregistered , $request);
     return redirect('user/registration');
    
    }


    public function add_or_update($useregistered , $request){
        // dd($request);

        $useregistered->name=$request->name;
        $useregistered->email=$request->email;
        // $useregistered->phone no=$request->phone;
        $useregistered->password= Hash::make($request->password);
        // $useregistered->confirm_pass=$request->confirm;
        // $useregistered->role_id=$request->roleid;
        


        $useregistered->save();


    }

    public function search(Request $request)

    {
   
   
       
   // dd($request->all());
           $name = $request->name ?? '';
           // dd($name);
           $userlist = User::where('name', 'like', '%' . $name . '%')->paginate(10);     
           return view('user.userlist.index', compact('userlist','name'));
    
       }
   


}
