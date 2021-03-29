<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function certificateRequest(Request $request)
    {

        //student course reg id 

        $course_register = Course_Registered::find($request->course_reg_id);
        $course_register->certificate_status = 'requested';
        $course_register->save();

        $response = array(
            'status' => 'true',
            'data' => $course_register,
            'value' => 'Your request is under review .'
        );

        return $response;
    }
    public function voucherRequest(Request $request)
    {

        //student course reg id 

        $course_register = Course_Registered::find($request->course_reg_id);
        $course_register->voucher_status = 'requested';
        $course_register->save();

        $response = array(
            'status' => 'true',
            'data' => $course_register,
            'value' => 'Your request is under review .'
        );

        return $response;
    }
    public function badgeRequest(Request $request)
    {

        //student course reg id 

        $course_register = Course_Registered::find($request->course_reg_id);
        $course_register->badge_status = 'requested';
        $course_register->save();

        $response = array(
            'status' => 'true',
            'data' => $course_register,
            'value' => 'Your request is under review . '
        );

        return $response;
    }
}
