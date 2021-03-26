<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Mail\Certificate;
use App\Models\Course_Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use PDF;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $course_name = $request->course ?? '';
        $user_name = $request->name ?? '';
        $register_course = Course_Registered::whereHas('course', function ($q) use ($course_name) {
            $q->where('title', 'like', '%' . $course_name . '%');
        })->whereHas('user', function ($q) use ($user_name) {
            $q->where('name', 'like', '%' . $user_name . '%');
        })->with('course', 'user')->orderBy('created_at', 'desc')->paginate(10);
        return view('report.user.index', compact('register_course'));
    }


    public function certificate($id)
    {
        $reg_course = Course_Registered::with('course', 'user')->find($id);
        $new_value = 'Requested';
        if ($reg_course) {
            $details = [
                'to' => $reg_course->user->email,
                'from' => 'contactus@hrsedu.com',
                'title' => 'HRS Academy',
                'subject' => 'Certificate From HRS Academy ',
                "candidate_name"  => $reg_course->user->name,
                "course_name"  => $reg_course->course->title,
                "course_detail"  => $reg_course->course->requirments,
                "dated"  => date('d F, Y (l)'),
            ];
            Mail::to($reg_course->user->email)->send(new Certificate($details));
            $new_value = 'Send';
        }

        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;
    }

    public function voucher($id)
    {
        dd($id);
    }
    public function badge($id)
    {

        $reg_course = Course_Registered::get();


        $response = Response::json([
            "status" => true,
            'action' => 'update',
            'new_value' => $new_value
        ]);
        return $response;
    }

    public function mailCheck()
    {

        $details = [
            'to' => 'abid@mail.com',
            'from' => 'contactus@hrsedu.com',
            'title' => 'HRS Academy',
            'subject' => 'Certificate From HRS Academy ',
            "candidate_name"  => '$reg_course->user->name',
            "course_name"  => '$reg_course->course->title',
            "course_detail"  => '$reg_course->course->requirments',
            "dated"  => date('d F, Y (l)'),
        ];
        $pdf = PDF::loadView('admin.mail.certificate', compact('details'));
        return $pdf->download('invoice.pdf');
        // return view('admin.mail.certificate', compact('details'));
    }
}
