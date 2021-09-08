<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_Registered;
use App\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
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


        $userlist = User::with('sda')->where('role_id', 2)->paginate(10);
        return view('user.userlist.index', compact('userlist'));
    }





    public function delete($id)
    {
      $userlist = User::find($id);
        if ($userlist) {
         $user =    User::destroy($id);
      }
        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.delete'),

        ]);
        return $response;
    }
}
