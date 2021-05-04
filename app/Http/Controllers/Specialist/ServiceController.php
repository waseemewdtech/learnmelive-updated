<?php

namespace App\Http\Controllers\Specialist;

use App\Category;
use App\Http\Controllers\Controller;
use App\Models\Specialists\Service;
use App\Specialist;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $services = Service::where('specialist_id', Auth::user()->specialist->id)->get();
        $categories = Category::all();
        return view('frontend.settings.services',compact('services', 'categories'));
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
        $service = new Service();
        $specialist = Specialist::where('user_id',Auth::user()->id)->first();
        $service->specialist_id = $specialist->id;
        $service->category_id = $request->category;
        $service->sub_categories = json_encode($request->sub_categories);
        $service->title =  $request->title;
        $service->timing =  $request->timing;
        $service->rate =  $request->rate;
        // $tags = explode(',',$request->tags);
        // $service->tags = json_encode($tags);
        $service->description = $request->description;
        $service->status =  isset($request->status) ? '1' : '0';
        $service->save();
        return back()->with('success','Service added Successfuly!');
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
        $service = Service::findOrFail($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $service_subcategories = json_decode($service->sub_categories);
        $tags = json_decode($service->tags);
        

        return view('specialist/services/edit', compact('service', 'categories', 'subcategories', 'service_subcategories','tags'));
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
        $service = Service::findOrFail($id);
        $specialist = Specialist::where('user_id', Auth::user()->id)->first();
        $service->specialist_id = $specialist->id;
        $service->category_id = $request->category;
        $service->sub_categories = json_encode($request->sub_categories);
        $service->title =  $request->title;
        $service->timing =  $request->timing;
        $service->rate =  $request->rate;
        // $tags = explode(',', $request->tags);
        // $service->tags = json_encode($tags);
        $service->description = $request->description;
        $service->status =  isset($request->status)?'1':'0';
        $service->save();
        return back()->with('success', 'Service added Successfuly!');
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
