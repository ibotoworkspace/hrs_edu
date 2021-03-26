<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index($id)
    {

        $reg_course = $id;
        return view('report.voucher.create', compact('reg_course'));
    }

    public function save(Request $request)
    {

        $voucher = new Voucher();

        $voucher->voucher = $request->voucher;
        $voucher->voucher = $request->reg_course_id;
        $voucher->save();

        return redirect()->back();
    }
}
