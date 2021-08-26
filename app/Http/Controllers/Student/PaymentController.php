<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Courses;
use App\Models\Payment;
use App\Models\PromoCode;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Print_;
use Stripe;

class PaymentController extends Controller
{
    public function make_payment(Request $request)
    {
        $page_layout = new \stdClass();
        $page_layout->header = true;
        session(['page_layout' => $page_layout]);

        if($request->mobile_course_id){
            $course_id = $request->mobile_course_id;
        }
        else{
            $course_id = decrypt($request->course_id);
        }
                
        $user = User::where('access_token',$request->_token)->first();

        $register_course = Course_Registered::with('course')
                        ->where('course_id',$course_id)
                        ->where('user_id',$user->id)->first();

        return view('studentdashboard.makepayment.index', compact('register_course'));
    }
    public function make_payment_app(Request $request)
    {
        $page_layout = new \stdClass();
        $page_layout->header = false;
        $page_layout->token = $request->_token;
        session(['page_layout' => $page_layout]);

        // $register_course = Course_Registered::with('course')->find($request->course_id);

        // $header = $request->header('authorization-secure') ?? $request->header('Authorization-secure');
        $user = User::where('access_token', $request->_token)->first();
        $register_course = Course_Registered::where('course_id', $request->course_id)->where('user_id', $user->id)->first();
        $course = Courses::find($request->course_id);
        if (!$register_course) {
            $registration = new Course_Registered();
            $registration->course_id =  $request->course_id;
            $registration->user_id =  $user->id;
            $registration->name = $course->title;
            $registration->save();
            
            $register_course = Course_Registered::where('course_id', $request->course_id)->where('user_id', $user->id)->first();
        }



        return view('studentdashboard.makepayment.index', compact('register_course'));
    }

    public function paymentMethod(Request $request)
    {
        $register_course = Course_Registered::with('course')->find($request->course_id);
        $payment_common = new \stdClass();
        $payment_common->register_course = $register_course;
        $payment_common->actual_price = $request->actual_price ?? 0;
        $payment_common->discount_price = $request->discount_price ?? 0;
        $payment_common->promo_code_id = $request->promo_code_id ?? 0;
        $payment_common->price = $request->price ?? $register_course->course->price;

        session(['payment_common' => $payment_common]);

        if ($request->payment_type == 'paypal') {
            return view('studentdashboard.paypal.index');
        } else {
            // for stripe 
            return view('studentdashboard.proceedpayment.index');
        }
    }


    public function stripePost(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            $page_layout = session()->get('page_layout');
            $user = User::where('access_token', $page_layout->token)->first();
        }
        if (!$user) {
            return back()->with('error', 'Unauthorized request');
        }
        $course_register = Course_Registered::with('course')->find($request->course_register_id);
        // dd(ceil($course_register->course->price));
        Stripe\Stripe::setApiKey(Config::get('services.stripe.STRIPE_SECRET'));
        try {
            $stripe =  Stripe\Charge::create([
                "amount" => ceil($course_register->course->price) * 100, // value pass in cent 
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from HRS Acedmey."
            ]);
            Log::info('stripe toekn');
            Log::info($request->stripeToken);
            $payment = new Payment();
            $payment->user_id = $user->id;
            $payment->payment_id = $stripe->id;
            $payment->course_register_id = $request->course_register_id;
            $payment->price = $request->amount;
            $payment->actual_amount = $request->actual_price;
            $payment->discount_amount = $request->discount_price;
            $payment->promocode_id = $request->promo_code_id;
            $payment->payment_response = $stripe->status;
            $payment->card_type = $stripe->payment_method_details->card->brand;
            $payment->save();



            $course_register->is_paid = 1;
            $course_register->save();
            Session::flash('success', 'Payment successful!');
            // return \View('user.payment.index', compact('user_request'));
            return view('studentdashboard.proceedpayment.index')->with('success', 'Payment successful!');
            // return back()->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            // Session::flash('error', "Error! Please Try again.");
            // return redirect('user/payment')->with('success','Payment successful!');
            // return back()->with('error', "Error!" . $e); 
            Log::info('Error');
            Log::info($e);
            return view('studentdashboard.proceedpayment.index')->with('error', $e);
        }
    }


    public function details(Request $request)
    {

        $user_id = Auth::id();
        $payment_details = Payment::with('registerCourse.course','promocode')->where('user_id', $user_id)->get();

        return view('studentdashboard.paymenthistory.index', compact('payment_details'));
    }


    public function stripePayment()
    {
        return view('studentdashboard.proceedpayment.index');
    }
    public function paypalpayment()
    {
        return view('studentdashboard.paypal.index');
    }


    public function applyPromocode(Request $request)
    {

        // dd($request->all());
        $current_date_time = Carbon::now()->toDateTimeString();
        // check code from database 

        $promocode = PromoCode::where('code', $request->code)
            ->where('is_active', 1)
            ->where('used_times', '>', 0)
            ->where('validity', '>', $current_date_time)
            ->first();

        if ($promocode) {

            $promocode->used_times =  $promocode->used_times - 1;
            $promocode->save();
            $discount_amount = $promocode->percentage / 100;
            $discount_amount = $discount_amount * $request->current_amount;
            $promo_amount = ceil($request->current_amount - $discount_amount);

            $res = new \stdClass();
            $res->promo_id = $promocode->id;
            $res->actual_amount = $request->current_amount;
            $res->discount_amount = ceil($discount_amount);
            $res->price = $promo_amount;

            $response = array(
                'status' => 'success',
                'msg' => 'Promocode Applied',
                'response' => $res,
            );
        } else {

            $response = array(
                'status' => 'error',
                'msg' => 'Promocode Not valid !',
                'response' => '',
            );
        }
        return $response;
    }

 
}
