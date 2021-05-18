<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Bid;
use App\Payment;
use App\Specialist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $specialist = Specialist::findOrFail($request->specialist_id);
        $amount = $request->amount;
        $appointment_id = $request->appointment;
        $payment_for = $request->payment_for;
        $admin = User::where('user_type','admin')->first();
        $admin_stripe_publick_key = $admin->stripe_public_key;
        return view('stripe',compact('specialist', 'amount', 'appointment_id', 'payment_for','admin_stripe_publick_key'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $admin = User::where('user_type','admin')->first();
        Stripe\Stripe::setApiKey($admin->stripe_secret_key);
        Stripe\Charge::create([
            "amount" => 100 * $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from ". Auth::user()->name,
        ]);
        $payment = new Payment();
        $payment->user_id = Auth::user()->id;
        $payment->received_amount = $request->amount;
        if($request->payment_for == 'appointment'){
            $appointment = Appointment::findOrFail($request->appointment_id);
            $appointment->payment_amount = $appointment->payment_amount + $request->amount;
            if($appointment->rate > $appointment->payment_amount + $request->amount){
                $appointment->payment_status = '1';
            }else{
                $appointment->payment_status = '2';

            }
            $appointment->save();
            $payment->specialist_id = $appointment->specialist_id;
            $payment->appointment_id = $appointment->id;
        }

        if($request->payment_for == 'bid'){
            $bid = Bid::findOrFail($request->appointment_id);
            $bid->payment_amount =  $bid->payment_amount + $request->amount;
            if ($bid->budget > $bid->payment_amount + $request->amount) {
                $bid->payment_status = '1';
            } else {
                $bid->payment_status = '2';
            }
            $bid->save();
            $payment->specialist_id = $bid->specialist_id;
            $payment->bid_id = $bid->id;
        }
        $payment->save();


        // Session::flash('success', 'Payment successful!');

        // return back();
    }
}