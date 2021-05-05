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
        $test_assigned = Test_assigned::with('group','test')->where('test_id', $id)->orderByDesc('created_at')->paginate(10);
      
        return view('admin.test_assigned.index', compact('test_assigned', 'test_id'));
    }

    public function create($test_id)
    {
        $control = 'create';
        $group =  Group::pluck('name', 'id');

        return view('admin.test_assigned.create', compact('control', 'group', 'test_id'));
    }


    public function save(Request $request)
    {
        $test_assigned = new Test_assigned();
        $this->add_or_update($request, $test_assigned);

        return redirect('admin/test_assigned/'.$request->test_id);
    }

    public function edit($id)
    {
        $control = 'edit';
        $test_assigned = Test_assigned::with('group','test')->find($id);
        $group =  Group::pluck('name', 'id');
        $test_id = $test_assigned->test_id;
       
        return \View::make('admin.test_assigned.create', compact(
            'control',
            'test_assigned',
            'group',
            'test_id'
            
        ));
    }

    public function update(Request $request, $id)
    {
        $test_assigned = Test_assigned::with('group','test')->find($id);
        
        $this->add_or_update($request, $test_assigned);
        return redirect('admin/test_assigned/'.$request->test_id);
    }



    public function add_or_update(Request $request, $test_assigned)
    {
        
       $d_time = $request->start_date.' ' .$request->start_time;

        $start_time = strtotime($d_time);
        $test_duration = $request->test_duration * 60;
     
        $test_assigned = new Test_assigned();

        $test_assigned->group_id = $request->group_id;
        $test_assigned->test_id = $request->test_id;
        $test_assigned->start_date_time = $start_time;
        $test_assigned->end_date_time = ($start_time + $test_duration);
        $test_assigned->test_duration = $test_duration;

        $test_assigned->save();
        return redirect('admin.test_assigned/'.$request->test_id);
    }



    public function destroy_undestroy($id)
    {

        $test_assigned = Test_assigned::find($id);
        if ($test_assigned) {
            Test_assigned::destroy($id);
            $new_value = 'Activate';
        } else {
            Test_assigned::withTrashed()->find($id)->restore();
            $new_value = 'Delete';
        }
        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.delete'),
            'new_value' => $new_value
        ]);
        return $response;
    }






}
