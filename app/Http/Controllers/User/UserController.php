<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function aboutUs(){
        return view('user.aboutus.index');
    }

    public function index(){
        return view('user.layouts.index');
    }

 
    public function about(){
        return view('user.aboutus.index');
    }




    public function career(){
        return view('user.careerjobs.careerjobs');
    }





}




