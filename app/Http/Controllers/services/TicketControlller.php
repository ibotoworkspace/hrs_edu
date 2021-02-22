<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketControlller extends Controller
{
    public function ticketsubmit(Request $request)
    {
        $tick=new Ticket;
        $tick->user_id=$request->user_id;
        $tick->name=$request->name;
        $tick->issue=$request->issue;
        $tick->subject=$request->subject;
        $tick->message=$request->message;
        $tick->Save();
    }
}
