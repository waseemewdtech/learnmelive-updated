<?php

namespace App\Http\Controllers\Specialist;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Payment;
use App\ServiceRequest;
use App\User;
use App\withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agoDate = \Carbon\Carbon::now()->addDays(2)->format('d M Y');
        $currentDate = \Carbon\Carbon::today()->format('d M Y');
        $appointments = Appointment::where('specialist_id', Auth::user()->specialist->id)->where('status', '1')->where('payment_status','2')->whereBetween('date', [$currentDate, $agoDate])->get();
        $service_requests = ServiceRequest::where('status','active')->get();
        // dd()
        $categories = Category::all();
        return view('specialist.dashboard', compact('appointments', 'service_requests', 'categories'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getServiceRequest($id)
    {
        $service_request = ServiceRequest::findOrFail($id);
        return view('partials.frontend.get_service_request',compact('service_request'));
    }

    function widthdrawRequest(Request $request)
    {
        $payments = Payment::where('specialist_id',Auth::user()->specialist->id)->where('release_status','released')->where('p_status','released')->get();
        foreach($payments as $payment){
            $payment->p_status = 'specialist_request';
            $payment->save();
            $withdraw_request = new withdraw();
            $withdraw_request->specialist_id = Auth::user()->specialist->id;
            $withdraw_request->payment_id = $payment->id;
            $withdraw_request->save();

        }
        $user = User::findOrFail(Auth::user()->id);
        $user->withdraw_status = 'request_made';
        $user->save();
        return 'Your withdrwa Request has been sent to admin money will transfer to your account in next 3 working days Thank You!';

    }

}
