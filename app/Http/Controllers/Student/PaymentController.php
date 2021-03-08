<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course_Registered;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Stripe;

class PaymentController extends Controller
{
    public function make_payment(Request $request)
    {

        $course_id = decrypt($request->course_id);


        $register_course = Course_Registered::with('course')->find($course_id);

        return view('studentdashboard.makepayment.index', compact('register_course'));
    }
    public function make_payment_app(Request $request)
    {
        // dd($request->all());
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
        $user = Auth::user();


        Stripe\Stripe::setApiKey(Config::get('services.stripe.STRIPE_SECRET'));
        try {
            $stripe =  Stripe\Charge::create([
                "amount" => $request->amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from HRS Acedmey."
            ]);
            $payment = new Payment();
            $payment->user_id = $user->id;
            $payment->payment_id = $stripe->id;
            $payment->course_register_id = $request->course_register_id;
            $payment->payment_response = $stripe->status;
            $payment->card_type = $stripe->payment_method_details->card->brand;
            $payment->save();


            $course_register = Course_Registered::find($request->course_register_id);
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
