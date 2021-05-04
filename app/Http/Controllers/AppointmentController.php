<?php

namespace App\Http\Controllers;

use App\Client;
use App\Models\Appointment;
use App\Models\Specialists\Service;
use Carbon\Carbon;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rating;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->user_type == 'specialist') {
            $appointments = Appointment::where('specialist_id', Auth::user()->specialist->id)->orderBy('created_at','ASC')->get();
            return view('frontend.settings.appointment', compact( 'appointments'));
        } else {
            $appointments = Appointment::where('user_id', Auth::user()->id)->orderBy('created_at', 'ASC')->get();
            return view('frontend.settings.appointment', compact('appointments'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id =  decrypt($id);
        $service = Service::findOrFail($id);
        $services = Service::where('specialist_id',$service->specialist_id)->where('id',
        '!=',$id)->get();
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();
        $appointments = Appointment::where('service_id',$id)->where('status','1')->whereBetween('created_at', [$today, $tomorrow])->get()->pluck('time')->toArray();
        return view('frontend.appointments',compact('service', 'appointments', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->service_id = $request->service_id;
        $appointment->specialist_id = $request->specialist_id;
        $appointment->date = $request->date;
        $appointment->rate = $request->rate;
        $appointment->time = $request->time;
        $appointment->save();
        return back()->with('success','Appointment Created Successfuly!');

    }

    public function storeAppointment(Request $request)
    {
        $date = getTimeZoneDate(Auth::user()->time_zone,'America/Chicago',$request->date." ".$request->time);
        $time = getTimeZoneTime(Auth::user()->time_zone,'America/Chicago',$request->date." ".$request->time);
        if(Appointment::where('date',$date)->where('time',$time)->first() !=null)
        {
            return back()->with('error',$request->time.' on '.$request->date.' has been already booked!');
        }
        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->service_id = $request->service_id;
        $appointment->specialist_id = $request->specialist_id;
        $appointment->date = $date;
        $appointment->rate = $request->rate;
        $appointment->time = $time;
        $appointment->save();
        return back()->with('success','Appointment Created Successfuly!');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::where('id',$id)->first();
        return view('frontend.settings.appointment_show', compact('appointment'));
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
        $appointment = Appointment::findOrFail($id);
        if($request->status == '1'){
            $appointment->status = $request->status;
        }
        if($request->status == '2'){
            $appointment->status = $request->status;
            
        }
        if($request->status == '3'){
            $appointment->status = $request->status;
        }
        $appointment->save();
        return back()->with('success', 'Appointment updated Successfuly!');
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

    public function addReview(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'rating'=>'required',
            'description'=>'required',
        ]);

        if($validations->fails())
        {
            return response()->json(['success' => false, 'message' => $validations->errors()]);
        }

        $review = new Rating();
        $review->appointment_id = $request->appointment_id;
        $review->specialist_id = $request->specialist_id;
        $review->user_id = Auth::user()->id;
        $review->rating = $request->rating;
        $review->description = $request->description;
        if($review->save())
        {
            return response()->json(['success' => true, 'message' =>"Review has been added successfully"]);
        }
    }

    public function userAppointmentNotification()
    {
        $user = Auth::user();
        if($user->user_type=="client"){
            $appointments = Appointment::where('user_id',$user->id)->where('notification_status',0)->get();
        }else if($user->user_type=="specialist"){
            $appointments = Appointment::where('specialist_id',$user->specialist->id)->where('notification_status',0)->get();
        }

        $arr =[];
        foreach($appointments as $appointment)
        {
            if($appointment->status=="Approved" || $appointment->status=="Cancelled"){
                // if($user->user_type=='client'){
                //     if($appointment->specialist->user->avatar!=''){
                //         $avatar=url('/').'/'.$appointment->specialist->user->avatar;
                //     }else{
                //         $pro=url('/public/uploads/user/default.jpg');
                //     }
                // }else{
                //     if($appointment->user->avatar!=''){
                //         $avatar=url('/').'/'.$appointment->user->avatar;
                //     }else{
                //         $avatar=url('/public/uploads/user/default.jpg');
                //     }
                // }
                ($user->user_type=='client')? ($appointment->specialist->user->avatar!='') ? $avatar=url('/').'/'.$appointment->specialist->user->avatar: $pro=url('/public/uploads/user/default.jpg') : ($appointment->user->avatar!='') ? $avatar=url('/').'/'.$appointment->user->avatar : $avatar=url('/public/uploads/user/default.jpg');
                ($user->user_type=='client')?$username=$appointment->specialist->user->username :$username=$appointment->user->username;
                $a = [];
                $a['id']=$appointment->id;
                $a['url'] = url('/appointments').'/'.$appointment->id;
                $a['status']=$appointment->status;
                $a['avatar']=$avatar;
                $a['username'] = $username;
                $arr[] = $a;
            }
        }
        return response()->json($arr);
    }

    public function notificationStatusUpdate($id)
    {
        $appointment = Appointment::find($id);
        $appointment->notification_status = 1;
        $appointment->save();
        return "fine";
    }
}
