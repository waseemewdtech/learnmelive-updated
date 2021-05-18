<?php

namespace App\Http\Controllers\Specialist;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Specialists\Service;
use App\User;
use App\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceControllerBkp17521Changed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $services = ServiceCategory::where('user_id', Auth::user()->id)->get();
        $category = Category::where('title',Auth::user()->serviceCategory->name)->first();
        $categories = Category::all();
        return view('frontend.settings.services',compact('services', 'category','categories'));
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
        $serviceCategory = new ServiceCategory();
        $serviceCategory->user_id = Auth::user()->id;
        $serviceCategory->name = $request->name;
        $serviceCategory->duration = $request->duration;
        $serviceCategory->rate = $request->rate;
        $serviceCategory->save();
        return redirect()->route('services.index')->with('success','Service added Successfuly!');
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
        $service = ServiceCategory::findOrFail($id);
        $categories = Category::all();
        return view('specialist/services/edit', compact('service', 'categories'));
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
        $serviceCategory = ServiceCategory::findOrFail($id);
        $serviceCategory->name = $request->name;
        $serviceCategory->duration = $request->duration;
        $serviceCategory->rate = $request->rate;
        $serviceCategory->save();
        return back()->with('success', 'Service Updated Successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id)->delete();
    }

    public function getSubCategories(Request $request)
    {
        $subcategories = Category::where('id', $request->id)->first()->subcategories;
        return view('specialist/services/get_subcategories', compact('subcategories'))->render();
    }

    public function getQueryServices(Request $request)
    {
        if($request->val =='')
        {
            if($request->has('service_id'))
            {
                $services = Service::where('specialist_id',$request->id)->where('id', '!=', $request->service_id)->get();
            }
            else{
                $services = Service::where('specialist_id',$request->id)->get();
            }
        }
        else
        {
            if($request->has('service_id'))
            {
                $services = Service::where('id', '!=', $request->service_id)->where('specialist_id',$request->id)->where('title', 'like', '%' . $request->val . '%')->get();
            }
            else{
                $services = Service::where('specialist_id',$request->id)->where('title', 'like', '%' . $request->val . '%')->get();
            }
        }
        return view('partials.frontend.get_search_services', compact('services'))->render();
    }
}
