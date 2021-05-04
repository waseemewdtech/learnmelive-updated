<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Bid;
use App\Specialist;
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
        return view('stripe',compact('specialist', 'amount', 'appointment_id', 'payment_for'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $specialist = Specialist::where('stripe_public_key',$request->stripe_public_key)->first();
        Stripe\Stripe::setApiKey($specialist->stripe_secrete_key);
        Stripe\Charge::create([
            "amount" => 100 * $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from ". Auth::user()->name,
        ]);
        if($request->payment_for == 'appointment'){
            $appointment = Appointment::findOrFail($request->appointment_id);
            $appointment->payment_amount = $appointment->payment_amount + $request->amount;
            if($appointment->rate > $appointment->payment_amount + $request->amount){
                $appointment->payment_status = '1';
            }else{
                $appointment->payment_status = '2';

            }
            $appointment->save();
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
        }


        // Session::flash('success', 'Payment successful!');

        // return back();
    }
}