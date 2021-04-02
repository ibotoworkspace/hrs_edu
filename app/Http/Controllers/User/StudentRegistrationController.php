<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Registered;
use App\User;
use Illuminate\Support\Facades\Hash;

class StudentRegistrationController extends Controller
{


    public function index()
    {


        // $useregistered = User_Registered::paginate(10);

        return view('user.registration.index');
    }
    public function list()
    {


        $userlist = User::with('skilladvisor')->where('role_id', 2)->paginate(10);
      
        return view('user.userlist.index', compact('userlist'));
    }





    public function search(Request $request)

    {



        // dd($request->all());
        $name = $request->name ?? '';
        // dd($name);
        $userlist = User::where('name', 'like', '%' . $name . '%')->paginate(10);
        return view('user.userlist.index', compact('userlist', 'name'));
    }
}
