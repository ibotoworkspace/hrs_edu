<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        $student_id = Auth::id();

        $user_ticket = Ticket::where('user_id',$student_id)->paginate(10);



        return view('studentdashboard.ticket.index',compact('user_ticket'));
    }

    public function add_ticket(Request $request)
    {
        $method = $request->method();

        if ($method == 'POST') {

            $student_id = Auth::id();

            $ticket = new Ticket();
            $ticket->user_id = $student_id;
            $ticket->name = $request->name;
            $ticket->issue = $request->issue;
            $ticket->subject = $request->subject;
            $ticket->message = $request->mesage;

            if ($request->hasFile('avatar')) {
                $avatar = $request->avatar;
                $root = $request->root();
                $ticket->avatar = $this->move_img_get_path($avatar, $root, 'ticket');
            }
            $ticket->save();
            return view('studentdashboard.ticket.index');
        } else {
            return view('studentdashboard.ticket.add');
        }
    }
}
