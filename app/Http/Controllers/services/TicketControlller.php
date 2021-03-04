<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TicketControlller extends Controller
{
    public function ticketsubmit(Request $request)
    {
        try {
            $tick = new Ticket;
            $tick->user_id = $request->user_id;
            $tick->name = $request->name;
            $tick->issue = $request->issue;
            $tick->subject = $request->subject;
            $tick->message = $request->message;
            $tick->Save();

            return $this->sendResponse(200, "Your ticket has been submitted successfully.");
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => $e->getMessage()
            ];
        }
    }
}
