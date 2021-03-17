<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkillAdvisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SkillAdvisorController extends Controller
{
    public function index()
    {

        $advisor = SkillAdvisor::paginate(10);


        return view('admin.advisor.index', compact('advisor'));
    }

    public function updateStatus($id)
    {
        $advisor = SkillAdvisor::find($id);

        if($advisor->status == 'pending'){
            $advisor->status = 'approved' ;
            $advisor->save();
            $new_value = 'Approved';

        }else{
            $advisor->status = 'pending' ;
            $advisor->save();
            $new_value = 'Pending';
        }
        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;


    }
}
