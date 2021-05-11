<?php

namespace App\Http\Controllers;

use App\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestActiveMail;
use App\Mail\ServiceRequestInActiveMail;
use Validator;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminClientPosting()
    {
        $postings = ServiceRequest::all();
        return view('admin.postings.index',compact('postings'));
    }

    public function adminClientPostingUpdate($id,Request $request){
        $posting = ServiceRequest::find($id);
        $posting->status = $request->status;
        $posting->save();
        if($posting->status=='active'){
            Mail::to($posting->user->email)->send(new ServiceRequestActiveMail(['name'=>$posting->title]));
        }else if($posting->status=='inactive'){
            Mail::to($posting->user->email)->send(new ServiceRequestInActiveMail(['name'=>$posting->title]));
        }
        return $posting->status;
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
        $validations = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'budget' => 'required',
            'description' => 'required',
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->withInput();
        }

        $service_request = new ServiceRequest();
        $service_request->title = $request->title;
        $service_request->category_id = $request->category;
        $service_request->user_id = Auth::user()->id;
        $service_request->description = $request->description;
        $service_request->budget = $request->budget;
        if($request->hasFile('tags')){
            $file = $request->tags;
            $file_original_name = $file->getClientOriginalName();
            $image_changed_name = time() . '.' .$file->extension();
            $file->move('public/uploads/files/', $image_changed_name);
            $service_request->attachment = url('uploads/files').'/'. $image_changed_name;
        }
        $service_request->save();
        return back()->with('success','Request has been generated!');
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
}
