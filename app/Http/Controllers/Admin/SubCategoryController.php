<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use Validator;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status','active')->get();
        $subcategories = SubCategory::all();
        return view('admin.subcategories.index',compact('categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'name'=>'required',
        ]);

        if($validations->fails())
        {
            return response()->json(['success' => false, 'message' => $validations->errors()]);
        }

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        if($subcategory->save())
        {
            return response()->json(['success' => true, 'message' =>"Subcategory has been added successfully"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $validations = Validator::make($request->all(),[
            'category'=>'required',
            'name'=>'required',
        ]);

        if($validations->fails())
        {
            return response()->json(['success' => false, 'message' => $validations->errors()]);
        }

        $subcategory->category_id = $request->category;
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        if($subcategory->save())
        {
            return response()->json(['success' => true, 'message' =>"Subcategory has been updated successfully"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SubCategory $subcategory)
    {
        if($subcategory->delete())
        {
            return back()->withMessage('SubCategory has been deleted successfully');;
        }
    }
}
