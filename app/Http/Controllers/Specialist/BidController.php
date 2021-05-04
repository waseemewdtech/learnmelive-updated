<?php

namespace App\Http\Controllers\Specialist;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all()->groupBy('service_request_id');
        return view('frontend.settings.bid', compact('bids'));
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
        $bid_request = new Bid();
        $bid_request->specialist_id = $request->specialist_id;
        $bid_request->service_request_id = $request->service_request_id;
        $bid_request->budget = $request->budget;
        $bid_request->payment_amount = 0;
        if ($request->time == 'Days') {
            $bid_request->delivery = $request->delivery . " " . $request->time;
        }
        if ($request->time == 'Hours') {

            $bid_request->delivery = $request->delivery . " " . $request->time;
        }
        if ($request->time == 'Minutes') {


            $bid_request->delivery = $request->delivery . " " . $request->time;
        }
        $bid_request->perposal = $request->perposal;
        if ($file = $request->file('attachment')) {
            $file_original_name = $file->getClientOriginalName();
            $image_changed_name = time() . '_' . str_replace('', '-', $file_original_name);
            $file->move('public/uploads/files/', $image_changed_name);
            $bid_request->attachment = 'uploads/files/' . $image_changed_name;
        }
        $bid_request->save();
        return back()->with('success', 'Bid Created Successfuly!');
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
        $bid = Bid::findOrFail($id);
        $bid->status = $request->status;
        $bid->save();
        $approval = Bid::where('service_request_id',$bid->service_request_id)->where('status','1')->exists();
        
    
        return response()->json(['id' => $id, 'status' => $bid->status,'approval'=>$approval]);
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

    public function changeWorkStatus(Request $request)
    {
        $bid = Bid::findOrFail($request->bid_id);
        $bid->work_status = $request->work_status;
        $bid->save();
        return $bid->work_status;
    }
}
