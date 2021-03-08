<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Stripe;

class PaymentController extends Controller
{
    public function make_payment(Request $request)
    {
        $page_layout = new \stdClass();
        $page_layout->header = true;
        session(['page_layout' => $page_layout]);

        $course_id = decrypt($request->course_id);


        $register_course = Course_Registered::with('course')->find($course_id);

        return view('studentdashboard.makepayment.index', compact('register_course'));
    }
    public function make_payment_app(Request $request)
    {
        $page_layout = new \stdClass();
        $page_layout->header = false;
        $page_layout->token = $request->_token;
        session(['page_layout' => $page_layout]);

        $register_course = Course_Registered::with('course')->find($request->course_id);
        return view('studentdashboard.makepayment.index', compact('register_course'));
    }

    public function paymentMethod(Request $request)
    {
        $register_course = Course_Registered::with('course')->find($request->course_id);

        $payment_common = new \stdClass();
        $payment_common->register_course = $register_course;

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
        Log::info('in payment');
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
                "amount" => 120.0, //ceil($course_register->course->price)
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
            $payment->payment_response = $stripe->status;
            $payment->card_type = $stripe->payment_method_details->card->brand;
            $payment->save();


            
            $course_register->is_paid = 1;
            $course_register->save();
                return  $stripe ;
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
            return $e ;
            return view('studentdashboard.proceedpayment.index')->with('error', $e);
        }
    }


    public function details(Request $request)
    {

        $user_id = Auth::id();
        $payment_details = Payment::with('registerCourse.course')->where('user_id', $user_id)->get();

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
}
