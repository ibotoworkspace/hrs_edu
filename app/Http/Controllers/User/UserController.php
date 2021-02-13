<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use validator;

use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{


    function login()
    {
        return view('user.users.index');
    }


    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password'),
            'role_id' => 1
        );

        if(Auth::attempt($user_data))
        {
            return redirect('user/home');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }



    function logout()
    {
        Auth::logout();
        return redirect('user.users.index');
    }



    public function aboutUs(){
        return view('user.aboutus.index');
    }

    public function index(){
        return view('user.users.index');
    }

 
    public function about(){
        return view('user.aboutus.index');
    }




    public function certificate(){
        return view('user.certificate.certificate');
    }

    // public function login(){
    //     return view('user.login.index');
    // }




public function career(){
    return view('user.careerjobs.careerjobs');
}
// function userscore()
// {
//     return view('user.userscore.index');
// }
    // public function contactus(){
    //     return view('user.contactus.index');



        
    // }

    public function contentwriter(){
        return view('user.contentwriter.index');
    }

    public function coprate(){
        return view('user.coprate.index');
    }

    public function courses(){
        return view('user.courses.index');
    }

    public function designer(){
        return view('user.designer.index');
    }

    public function home(){
        return view('user.home.index');
    }

    public function hrsbackend(){
        return view('user.hrsbackend.index');
    }

    public function hrsdesktop(){
        return view('user.hrsdesktop.index');
    }

    public function hrshacking(){
        return view('user.hrshacking.index');
    }

    public function hrsitclient(){
        return view('user.hrsitclient.index');
    }

    public function hrslinux(){
        return view('user.hrslinux.index');
    }

    public function hrslti(){
        return view('user.hrslti.index');
    }

    public function hrsnetwork(){
        return view('user.hrsnetwork.index');
    }

    public function hrsoffice(){
        return view('user.hrsoffice.index');
    }

    public function hrspc(){
        return view('user.hrspc.index');
    }

    public function hrssecurity(){
        return view('user.hrssecurity.index');
    }

    public function hrsserver(){
        return view('user.hrsserver.index');
    }


    public function learning(){
        return view('user.learning.index');
    }

    public function makepayment(){
        return view('user.makepayment.index');
    }

    public function myregstration(){
        return view('user.myregstration.index');
    }

    public function phpdeveloper(){
        return view('user.phpdeveloper.index');
    }

    public function registration(){
        return view('user.registration.index');
    }

    public function regstration(){
        return view('user.regstration.index');
    }

    public function resourse(){
        return view('user.resourse.index');
    }

    public function skilladvisor(){
        return view('user.skilladvisor.index');
    }

    public function studentdashboard(){
        return view('user.studentdashboard.index');
    }



    public function studentprofile(){
        return view('user.studentprofile.index');
    }

}




