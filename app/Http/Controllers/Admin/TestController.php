<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\Test;
use App\Models\Courses;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Libraries\ExportToExcel;
use Maatwebsite\Excel\Concerns\ToArray;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name ?? '';
        $test = Test::where('name', 'like', '%' . $name . '%')->paginate(10);
        return view('admin.test.index', compact('test'));
    }

    public function create()
    {
        $control = 'create';
        $courses =  Courses::pluck('title','id');
        // dd($course);
        return view('admin.test.create', compact('control','courses'));
    }

    public function save(Request $request)
    {
// dd($request->all());
        $test = new Test();

        $this->add_or_update($request, $test);

        return redirect('admin/test');

    }
    public function edit($id)
    {

        $control = 'edit';
        $test = Test::find($id);
        $courses =  Courses::pluck('title','id');

        return \View::make('admin.test.create', compact(
            'control',
            'test',
            'courses'

        ));
    }

    public function update(Request $request, $id)
    {
        $test = Test::find($id);
        // $courses = Courses::find($id);

        $this->add_or_update($request, $test);
        return Redirect('admin/test');
    }


    public function add_or_update(Request $request, $test)
    {

        $test->name = $request->name;
        $test->is_assignable =   $request->is_assignable;
        $test->course_id =   $request->courses_id;



        $test->save();

        return redirect()->back();
    }

    public function destroy_undestroy($id)
    {

        $test = Test::find($id);
        if ($test) {
            Test::destroy($id);
            $new_value = 'Activate';
        } else {
            Test::withTrashed()->find($id)->restore();
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
