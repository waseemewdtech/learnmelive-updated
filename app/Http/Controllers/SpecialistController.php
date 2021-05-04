<?php

namespace App\Http\Controllers;

use App\Models\Specialists\Portfolio;
use Illuminate\Http\Request;
use App\Specialist;
use App\User;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialists = Specialist::all();
        return view('admin.specialists.index',compact('specialists'));
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
        $specialist = User::findOrFail($id);
        $specialist->status = $request->status;
        $specialist->save();
        if($request->status == 'active'){

            return back()->with('success','Specialist has been activated successfully');
        }else{

            return back()->with('success','Specialist has been blocked successfully');
        }
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

    // get the single specialist detail
    public function getSpecialistDetail($id)
    {
        $specialist = Specialist::where('id',decrypt($id))->first();
        return view('frontend.specialist_detail',compact('specialist'));
    }

    public function getPortfolio($id)
    {
        $portfolios = Portfolio::where('specialist_id', decrypt($id))->get();
        return view('frontend.portfolio_display',compact('portfolios'));
    }
}
