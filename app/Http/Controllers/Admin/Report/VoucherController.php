<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
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
        $voucher->reg_course_id = $request->reg_course_id;
        $voucher->save();

        $reg_course = Course_Registered::find($request->reg_course_id);
        $reg_course->voucher_status= "accepted" ;
        $reg_course->save();

        return redirect('admin/report/user');
    }
}
