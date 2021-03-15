<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ticketController extends Controller
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
}
