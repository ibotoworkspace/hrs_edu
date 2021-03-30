<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Mail\Voucher as MailVoucher;
use App\Models\Course_Registered;
use App\Models\Voucher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VoucherController extends Controller
{
    public function index($id, $user_id)
    {

        $reg_course = $id ?? 0;
        $user_id = $user_id ?? 0;
        return view('report.voucher.create', compact('reg_course', 'user_id'));
    }

    public function save(Request $request)
    {
        $user = User::find($request->user_id);
        $voucher = new Voucher();
        $voucher->reg_course_id = $request->reg_course_id;

        if ($request->hasFile('voucher_file')) {
            $avatar = $request->voucher_file;
            $root = $request->root();
            $voucher->voucher = $this->move_img_get_path($avatar, $root, 'voucher');
        }
        $voucher->save();
        $details = [
            'to' => $user->email,
            'from' => 'contactus@hrsedu.com',
            'title' => 'HRS Academy Course Download Request ',
            'subject' => 'Course pdf code ',
            "voucher"  => $voucher->voucher,
        ];

        Mail::to($user->email)->send(new MailVoucher($details));

        $reg_course = Course_Registered::find($request->reg_course_id);
        $reg_course->voucher_status = "accepted";
        $reg_course->save();

        return redirect('admin/report/user');
    }
}
