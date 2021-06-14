<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Libraries\ExportToExcel;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Payment::with('user', 'registerCourse.course','promocode')->orderBy('created_at', 'desc')->paginate('10');
        return view('admin.listoforder.index', compact('orders'));
    }

    public function index_excel(Request $request)
    {
        $orders = Payment::with('User', 'registerCourse.course','promocode')->orderBy('created_at', 'desc')->get();
        $view =  view('admin.listoforder.export', compact('orders'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'order.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $orders = Payment::with('User', 'registerCourse.course','promocode')->orderBy('created_at', 'desc')->get();
        $view =  view('admin.listoforder.export', compact('orders'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'order.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $orders = Payment::with('User', 'registerCourse.course','promocode')->orderBy('created_at', 'desc')->get();
        $pdf = PDF::loadView('admin.listoforder.export', compact('orders', 'type'));

        return $pdf->download('HRS-order-list.pdf');
    }
}
