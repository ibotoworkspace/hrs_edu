<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;


class ticketController extends Controller
{
    function ticket()
    {
      
 
    $ticket = Ticket::paginate(10);
   
    return view('admin.ticket.index', compact('ticket'));

}
}
