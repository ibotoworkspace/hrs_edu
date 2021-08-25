<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use App\Models\PromoCode;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Illuminate\Support\Carbon;
use App\Libraries\ExportToExcel;

class PromoCodeController extends Controller
{
    public function index()
    {

        $promocode = PromoCode::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.promocode.index', compact('promocode'));
    }

    public function create()
    {
        $control = 'create';
        $new_date = '';
        return \View::make(
            'admin.promocode.create',
            compact('control','new_date')
        );
    }

    public function save(Request $request)
    {

        //    dd($request->all());
        $promocode = new PromoCode();
        // $course = new Courses();


        $this->add_or_update($request, $promocode);

        return Redirect('admin/promocode');
    }
    public function edit($id)
    {
        // dd($id);

        $control = 'edit';
        $promocode = PromoCode::find($id);
        $new_date = Carbon::parse($promocode->validity)->format('Y-m-d');//m/d/Y;
       
        // dd(  $new_date);
      

        return \View::make('admin.promocode.create', compact(
            'control',
            'promocode',
            'new_date'

        ));
    }

    public function update(Request $request, $id)
    {
      
        $promocode = PromoCode::find($id);
        // $courses = Courses::find($id);
        $this->add_or_update($request, $promocode);
        return Redirect('admin/promocode');
    }


    public function add_or_update(Request $request, $promocode)
    {

        $promocode->title = $request->title;
        $promocode->percentage =   $request->percentage;
        $promocode->code =   $request->code;
        $promocode->validity =   strtotime($request->validity);
        $promocode->used_times =   $request->used_times;
        $promocode->is_active =   $request->is_active;
        $promocode->save();

        return redirect()->back();
    }

    public function destroy_undestroy($id)
    {

        $promocode = PromoCode::find($id);
        if ($promocode) {
            PromoCode::destroy($id);
            $new_value = 'Activate';
        } else {
            PromoCode::withTrashed()->find($id)->restore();
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
        $promocode = PromoCode::orderBy('created_at', 'desc')->get();
        $view =  view('admin.promocode.export', compact('promocode'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'promo-code.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $promocode = PromoCode::orderBy('created_at', 'desc')->get();
        $view =  view('admin.promocode.export', compact('promocode'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'promo-code.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $promocode = PromoCode::orderBy('created_at', 'desc')->get();
        $pdf = PDF::loadView('admin.promocode.export', compact('promocode', 'type'));

        return $pdf->download('HRS-promo-code-list.pdf');
    }
}
