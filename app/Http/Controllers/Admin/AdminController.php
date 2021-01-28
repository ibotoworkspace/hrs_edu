<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;



class AdminController extends Controller
{
    function index()
    {
        return view('login.login');
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
            return redirect('admin/dashboard');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }



    function logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }


    function dashboard (){

        $admin_common = new \stdClass();
        $admin_dashboard = $this->admin_dashboard();

        $modules = $admin_dashboard['modules'];
        $reports = $admin_dashboard['reports'];
        
        $admin_common->id = '1';
        $admin_common->modules = $modules;
        $admin_common->reports = $reports;
        $admin_common->name = 'Admin';

        $chart = $admin_dashboard['chart'];

        session(['admin_common' => $admin_common]);
        return \View('layouts.default_dashboard',compact(
            'chart'));
    }
    public function admin_dashboard()
    {
//        $count = Templates::count('id');
//
//        $modules[] = [
//            'url' => 'templates',
//            'title' => 'Templates',
//            'count' => $count
//        ];


        // $count =Product::count('id');
        // $modules[] = [
        //     'url' => 'admin/products',
        //     'title' => 'Products',
        //     'count' => $count
        // ];

        // $count = Category::where('parent_id','!=',0)->count('id');
        // $modules[] = [
        //     'url' => 'user/productive',
        //     'title' => 'User',
        //     'count' =>'1'
        // ];

        // $count =Gallery::count('id');
        // $modules[] = [
        //     'url' => 'admin/gallery',
        //     'title' => 'Gallery',
        //     'count' => $count
        // ];

        $modules[] = [

            'url' => 'admin/courses',
            'title' => 'Total Courses',
            'total' => '3',
            'active' => '4',
            'image' => 'images/icon-20.png',

            
        ];

        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Total User',
            'total' => '9',
            'active' => '2',
            'image' => 'images/icon-21.png',

            
        ];
        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Total Quizes',
            'total' => '6',
            'active' => '1',
            'image' => 'images/icon-22.png',

            
        ];
        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Total Videos',
            'total' => '2',
            'active' => '6',
            'image' => 'images/icon-23.png',

            
        ];
        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Promo code',
            'total' => '1',
            'active' => '2',
            'image' => 'images/icon-24.png',

            
        ];
        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Order',
            'total' => '3',
            'active' => '5',
            'image' => 'images/icon-25.png',

            
        ];
        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Total Register user',
            'total' => '3',
            'active' => '5',
            'image' => 'images/icon-26.png',

            
        ];
        $modules[] = [

            'url' => 'admin/hrs',
            'title' => 'Member Ship',
            'total' => '5',
            'active' => '6',
            'image' => 'images/icon-27.png',

            
        ];
        




     

      
        // $count = Rota_Generate_Pattern::count('id');
        // $modules[] = [
        //     'url' => 'admin/rota/generate/pattern',
        //     'title' => 'ROTA Generate Pattern',
           
        // ];


     

      

        // $reports[] = [
        //     'url' => 'admin/reports/orders',
        //     'title' => 'Orders',
        // ];

        $myvar = [];
        $myvar['modules'] = $modules;
        $myvar['reports'] = [] ;
        $myvar['chart'] = [];

        return $myvar;
    }




}






