<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index (){


        $orders = Payment::with('User','registerCourse.course')->orderBy('created_at', 'desc')->paginate('10');

        return view('admin.listoforder.index',compact('orders'));
    }
}
