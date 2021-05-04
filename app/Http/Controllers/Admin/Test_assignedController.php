<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test_assigned;
use App\Models\Courses;
use App\Models\Group;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;

class Test_assignedController extends Controller
{



    public function index(Request $request , $id)
    {
        
        $test_id = $id;
        $test_assigned = Test_assigned::where('test_id', $id)->with('group')->paginate(10);
        return view('admin.test_assigned.index', compact('test_assigned', 'test_id'));
    }

    public function create($test_id)
    {

        $control = 'create';
        $group = Group::pluck('name', 'id');
        $test_assigned = Test_assigned::with('group');

        return view('admin.test_assigned.create', compact('control', 'group', 'test_id','test_assigned'));
    }


    public function save(Request $request)
    {

        // dd($request->all());

        $test_assigned = new Test_assigned();
        $this->add_or_update($request, $test_assigned);

        return redirect('admin/test_assigned/'.$request->test_id);
    }

    public function add_or_update(Request $request, $test_assigned)
    {

        $group_ids = [];
        foreach ($request->group as $g) {
            $group_ids[] = [

                'group_id' => $g,
                'test_id' =>  $request->test_id,

            ];
        }
        Test_assigned::insert($group_ids);
        return redirect('admin.test_assigned/'.$request->test_id);
    }
}
