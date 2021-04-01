<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libraries\ExportToExcel;
use App\Models\Lecturer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class LecturerController extends Controller
{

    public function index()
    {

        $lecturer = Lecturer::with('user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.lecturer.index', compact('lecturer'));
    }

    public function create()
    {
        $control = 'create';

        return \View::make(
            'admin.lecturer.create',
            compact('control')
        );
    }


    public function save(Request $request)
    {
        $lecturer = new Lecturer();

        $user = new User();

        $this->add_or_update($request, $lecturer, $user);

        return redirect('admin/lecturer');
    }
    public function edit($id)
    {

        $control = 'edit';
        $lecture = Lecturer::with('user')->find($id);
        return \View::make('admin.lecturer.create', compact(
            'control',
            'lecture'

        ));
    }

    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::find($id);
        $user = User::find($lecturer->user_id);
        $this->add_or_update($request, $lecturer, $user);
        return Redirect('admin/lecturer');
    }


    public function add_or_update($request, $lecturer, $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $lecturer->user_id = $user->id;
        $lecturer->details = $request->description;

        $lecturer->save();

        return redirect()->back();
    }

    public function destroy_undestroy($id)
    {
        $promocode = Lecturer::find($id);
        if ($promocode) {
            Lecturer::destroy($id);
            $new_value = 'Activate';
        } else {
            Lecturer::withTrashed()->find($id)->restore();
            $new_value = 'Delete';
        }
        $response = Response::json([
            "status" => true,
            'action' => Config::get('constants.ajax_action.delete'),
            'new_value' => $new_value
        ]);
        return $response;
    }

    public function index_excel(Request $request)
    {
        $lecturer = Lecturer::with('user')->orderBy('created_at', 'desc')->get();
        $view =  view('admin.lecturer.export', compact('lecturer'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'lecturer.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $lecturer = Lecturer::with('user')->orderBy('created_at', 'desc')->get();
        $view =  view('admin.lecturer.export', compact('lecturer'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'lecturer.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $lecturer = Lecturer::with('user')->orderBy('created_at', 'desc')->get();
        $pdf = PDF::loadView('admin.lecturer.export', compact('lecturer', 'type'));

        return $pdf->download('HRS-lecturer-list.pdf');
    }

    public function sendLink($id){

        $lecturer = Lecturer::find($id);



    }
}
