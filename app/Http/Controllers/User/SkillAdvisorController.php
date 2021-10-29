<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\SdaVerification;
use Illuminate\Http\Request;
use App\Models\SkillAdvisor;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class SkillAdvisorController extends Controller
{
    public function add(Request $request)
    {
      if ($request->isMethod('post')) {

            $check_user = User::where('email',$request->email)
            ->orwhere('mobileno',$request->phone)
            ->first();
            if ($check_user) {
                if($check_user->mobileno == $request->phone){
                    return back()->with('error', 'Mobile number already exist ');
                }
                else{
                    return back()->with('error', 'Email already exist ');
                }
            } else {

                $user = new User();
                $user->name = $request->name;
                $user->role_id = 3;
                $user->mobileno = $request->phone;
                $user->password = Hash::make($request->password);
                $user->email = $request->email;
                $user->save();
                $reg_code = uniqid();

                $skill_advisor = new SkillAdvisor();
                $skill_advisor->user_id = $user->id;
                $skill_advisor->phone_no = $request->phone;
                $skill_advisor->password = Hash::make($request->password);
                $skill_advisor->name = $request->name;
                $skill_advisor->email = $request->email;
                $skill_advisor->registration_code = $reg_code;
                $skill_advisor->save();

                $details = [
                    'to' => $request->email,
                    'from' => 'contactus@hrsedu.com',
                    'title' => 'HRS Academy',
                    'subject' => 'Reference Link From HRS Academy ',
                    "dated"  => date('d F, Y (l)'),
                    "verification_link" => url('user/verify_advisor/'.$reg_code)
                ];
                Mail::to($request->email)->send(new SdaVerification($details));

                return back()->with('success', 'An email with verification link was sent to  ' . $request->email);
            }
        } else {
            return view('user.advisor.create');
        }
    }

    public function verify_advisor(Request $request,$reg_code){

        $sda = SkillAdvisor::where('registration_code',$reg_code)->first();
        if($sda){
            $sda->is_verified = 1;
            $sda->save();
            return redirect('user/add/skilladvisor')->with('success', 'Email verified now waiting for admin approval');
        }
        return redirect('user/add/skilladvisor')->with('success', 'Invalid verification url');

    }
}
