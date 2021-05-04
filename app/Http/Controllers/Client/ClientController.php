<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Specialists\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bid;
use App\ServiceRequest;

class ClientController extends Controller
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
        $appointments = Appointment::where('user_id',Auth::user()->id)->where('status','1')->where('payment_status', '2')->whereBetween('date', [$currentDate, $agoDate])->get();
        $services = Service::all();
        $categories = Category::all();
        $service_requests = ServiceRequest::where('user_id',Auth::user()->id)->get();
        return view('client.dashboard',compact('appointments', 'services', 'categories','service_requests'));
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
        $appointments = Appointment::where('user_id',Auth::user()->id)->get();
        return view('client.appointment',compact('appointments'));
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
    public function getSubCategories(Request $request)
    {
        $subcategories = Category::where('id', $request->id)->first()->subcategories;
        return view('specialist/services/get_subcategories', compact('subcategories'))->render();
    }
}
