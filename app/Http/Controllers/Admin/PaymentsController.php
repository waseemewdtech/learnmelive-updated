<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Specialist;
use App\User;
use App\withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Stripe;
class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_requests = Payment::where('p_status','Specialist_request')->where('release_status','released')->get()->groupBy('specialist_id');
        return view('admin.payments.index',compact('payment_requests'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $specialist = Specialist::findOrFail($request->specialist_id);
        $amount = $request->amount;
        $payment_id= $request->payment;
        return view('admin.payments.stripe',compact('specialist', 'amount','payment_id'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePayment(Request $request)
    {
        $specialist = Specialist::where('stripe_public_key',$request->stripe_public_key)->first();
        \Stripe\Stripe::setApiKey($specialist->stripe_secrete_key);
        \Stripe\Charge::create([
            "amount" => 100 * $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from ". Auth::user()->name,
            ]);
            $payment = Payment::findOrFail($request->payment_id);
             $payment->p_status = 'paid';
            $payment->save();
            $withdrwa_request = withdraw::where('payment_id',$request->payment_id)->first();
            $withdrwa_request->status = 'paid';
            $withdrwa_request->save();
            $user = User::findOrFail($specialist->user->id);
            $user->total_balance = $user->total_balance - $request->amount;
            $user->total_withdrawl = $user->total_withdrawl+ $request->amount;
            $withdrwa_requests = Withdraw::where('specialist_id',$specialist->id)->pluck('status')->toArray();
            if( !in_array( "withdraw" ,$withdrwa_requests ) )
            {
                        $user->withdraw_status = 'do_request';
                    }
                    $user->save();


        // Session::flash('success', 'Payment successful!');

        // return back();
    }
}
