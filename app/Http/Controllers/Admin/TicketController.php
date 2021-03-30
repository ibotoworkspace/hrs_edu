<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Libraries\ExportToExcel;

class TicketController extends Controller
{
    function ticket()
    {


        $tickets = Ticket::paginate(10);

        return view('admin.ticket.index', compact('tickets'));
    }

    public function status($id)
    {

        $ticket = Ticket::find($id);

        if ($ticket->status == 'pending') {
            $ticket->status = 'resolved';
            $ticket->save();
            $new_value = 'Resolved';
        } else {
            $ticket->status = 'pending';
            $ticket->save();
            $new_value = 'Pending';
        }

        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;
    }

    public function index_excel(Request $request)
    {
        $tickets = Ticket::get();
        $view =  view('admin.ticket.export', compact('tickets'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'ticket.xlsx');

        return $excel;
    }
    public function index_csv(Request $request)
    {
        $tickets = Ticket::get();
        $view =  view('admin.ticket.export', compact('tickets'));

        $export_data = new ExportToExcel($view);

        $excel = Excel::download($export_data, 'ticket.csv');

        return $excel;
    }

    public function generatePDF()
    {
        $type = 'pdf';
        $tickets = Ticket::get();
        $pdf = PDF::loadView('admin.ticket.export', compact('tickets', 'type'));

        return $pdf->download('HRS-ticket-list.pdf');
    }
}
