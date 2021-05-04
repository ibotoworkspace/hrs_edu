<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test_assigned;
use App\Models\Test_result;
use App\Models\Test;
use App\User;
use App\Models\Group;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

class Test_resultController extends Controller
{
 

    public function index()
    {

        $test_result = Test::paginate(10);
        return view('admin.test_result.index', compact('test_result'));
    }


    public function details($id)
    {

        $user = Test_result::where('test_id',$id)->with('test','user')->paginate(10);
        
        return view('admin.test_result.details', compact('user'));
    }

}
