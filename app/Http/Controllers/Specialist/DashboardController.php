<?php

namespace App\Http\Controllers\Specialist;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\ServiceRequest;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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


}
