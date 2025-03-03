<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Bid;
use App\Portfolio;
use App\Models\Specialists\Service;
use App\Specialist;
use App\User;
use App\SubCategory;
use App\PaymentInfo;
use App\AvailableTime;
use App\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profile = Auth::user();
        // $subcategories = SubCategory::all();
        // $categories = Category::all();
        // $bids = Bid::all()->groupBy('service_request_id');
        // if (Auth::user()->user_type == 'specialist') {
        //     $portfolio_images = Portfolio::where('specialist_id', Auth::user()->specialist->id)->get();
        //     $services = Service::where('specialist_id', Auth::user()->specialist->id)->get();
        //     $appointments = Appointment::where('specialist_id', Auth::user()->specialist->id)->get();
        //     return view('profile', compact('profile', 'subcategories', 'services', 'categories', 'portfolio_images', 'appointments', 'bids'));
        // } else {
        //     $appointments = Appointment::where('user_id', Auth::user()->id)->get();
        //     return view('profile', compact('profile', 'subcategories', 'categories','appointments', 'bids'));
        // }
        $categories = Category::all();
        $profile = Auth::user();
        if($profile->type=='seller')
        {
            $category = Category::where('title',$profile->serviceCategory->name)->first();
            if($category->category_id !=-1)
            {
                $parentCategory =  Category::where('id',$category->category_id)->first();
                $subCategories =  Category::where('id',$parentCategory->id)->orWhere('category_id',$parentCategory->id)->get();
            }else{
                $subCategories = Category::where('title',Auth::user()->serviceCategory->name)->get();
            }    
        }else{
            $subCategories = [];
        }
        
        return view('frontend.settings.profile', compact('profile', 'subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_avatar(Request $request)
    {
        $profile = User::find(Auth::id());
        $old_avatar = $profile->picture;
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //storing new avatar image
        if ($request->hasFile('avatar')) {

            $profileImage = $request->file('avatar');
            $profile_image_original_name = $profileImage->getClientOriginalName();
            $image_changed_name = time() . '.'.$profileImage->extension();

            $profileImage->move('public/uploads/user/', $image_changed_name);
            $avatar_url = url('/uploads/user') .'/'. $image_changed_name;
        }

        $profile->picture = $avatar_url;
        $profile->save();

        if (!empty($old_avatar)){
            if(file_exists($old_avatar)){
                unlink($old_avatar);
            }
        }

        return back()->with('success', 'Profile image updated successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        $password = Auth::user();
        if (url()->current() == url('dashboard/password')){

            return view('admin.password', compact('password'));
        }else{
            return view('frontend.settings.password', compact('password'));
        }
    }
    public function UserPassword()
    {
        $password = Auth::user();
        return view('change_password', compact('password'));
    }


    public function update_UserPassword(Request $request)
    {

        $password = User::find(Auth::id());

        $this->validate($request, [
            'old_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed', 'different:old_password'],
        ]);
        if (Hash::check($request->old_password, $password->password)) {

            $password->password = Hash::make($request->new_password);
            $password->save();

            return back('/invoice')->with('success', 'Password updated successfully!');
        } else {
            return redirect('/invoice')->with('error', 'Old Password does not match!');
        }
    }
    public function update_password(Request $request)
    {
        $password = User::find(Auth::id());

        $this->validate($request, [
            'old_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed', 'different:old_password'],
        ]);
        if (Hash::check($request->old_password, $password->password)) {

            $password->password = Hash::make($request->new_password);
            $password->save();

            return back()->with('success', 'Password updated successfully!');
        } else {
            return redirect('password')->with('error', 'Old Password does not match!');
        }
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
    public function update(Request $request,$id)
    {
        $profile = User::find($id);
        $validations = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:tb_user,username,' . $profile->id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tb_user,email,' . $profile->id],
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations);
        }

        $profile->username = $request->username;
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->email = $request->email;
        $profile->country = $request->country;
        $profile->phone = $request->phone;
        $profile->timezone = $request->timezone;
        $profile->save();

        if(Auth::user()->type != 'admin'){

            if ($profile->type == 'seller') {
                if(count($request->days) >0)
                {
                    date_default_timezone_set(config('app.timezone'));
                    foreach(['mon','tue','wed','thr','fri','sat','sun'] as  $key => $value){
                        if(in_array($value,$request->days)){
                            $f = $value.'_from';
                            $t = $value.'_to';
                            $hours_arr[$value] = (strtotime($request->$f)*1000).'~'.(intval(strtotime($request->$t)*1000));
                        }else{
                            $hours_arr[$value] = 'Closed';
                        }
                    }
                    $hours_arr['user_id'] = $profile->id;
                    AvailableTime::where('user_id',$profile->id)->update($hours_arr);
                }
                $category = Category::find($request->sub_category_id);
                $serviceCategoryFirst= ServiceCategory::where('user_id',$profile->id)->first();
                $serviceCategory= ServiceCategory::find($serviceCategoryFirst->id);
                $serviceCategory->user_id = $profile->id;
                $serviceCategory->category_id = $category->id;
                $serviceCategory->name = $category->title;
                $serviceCategory->save();

                // if (count($request->days) > 0) {
                //     foreach ($request->days as $key => $value) {
                //         $from = $value . '_from';
                //         $to = $value . '_to';
                //         $hours_arr[$value] = [$request->$from, $request->$to];
                //         // if($value =="saturday" || $value=='sunday')
                //         // {
                //         //     $hours_arr[$value] = ['closed'];
                //         // }
                //         // else
                //         // {
                //         //     $hours_arr[$value] = [$data[$value.'_from'],$data[$value.'_to']];
                //         // }
            
                //     }
                // }
            
                // $specialist = Specialist::findOrFail(Auth::user()->specialist->id);
                // $specialist->user_id = $profile->id;
                // $specialist->category_id = $request->category_id;
                // $specialist->sub_category_id = json_encode($request->sub_category_id);
                // $specialist->business_phone = $request->business_phone;
                // $specialist->public_profile = $request->public_profile;
                // $specialist->payment_method = $request->payment_method;
                // if ($request->payment_method == 'stripe' && $request->user_type != 'client') {
                //     $specialist->payment_first_name = $request->payment_first_name;
                //     $specialist->payment_last_name = $request->payment_last_name;
                //     $specialist->payment_birth_date = $request->payment_birth_date;
                //     $specialist->payment_ssn = $request->payment_ssn;
                //     $specialist->account_number = $request->account_number;
                //     $specialist->routing_number = $request->routing_number;
                //     $specialist->stripe_public_key = $request->stripe_public_key;
                //     $specialist->stripe_secrete_key = $request->stripe_secrete_key;
                // } else if ($request->payment_method != 'stripe' && $request->user_type != 'client') {
                //     $specialist->payment_email = $request->payment_email;
                // }
                // $specialist->opening_hours = json_encode($hours_arr);
            
                // $specialist->save();
            } else if ($profile->user_type == 'client') {
                $client = Client::findOrFail(Auth::user()->client->id);
                $client->user_id = $profile->id;
                $client->business_phone = $request->business_phone;
            
                $client->save();
            }
        }
        return back()->with('success', 'Profile updated successfully!');

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

    public function portfolio()
    {
        $portfolio_images = Portfolio::where('user_id',Auth::user()->id)->get();
        return view('frontend.settings.portfolio',compact('portfolio_images'));
    }
    
    public function portfolioImages(Request $request)
    {
       
        foreach ($request->images as $key => $image) {
            $portfolio = new Portfolio();
            $profile_image_original_name = $image->getClientOriginalName();
            $image_changed_name = time() . $key . '_' . str_replace('', '-', '');

            $image->move('public/uploads/portfolio/', $image_changed_name);
            $portfolio->image = 'public/uploads/portfolio/' . $image_changed_name;
            $portfolio->specialist_id = Auth::user()->specialist->id;
            $portfolio->save();
        }
        return back()->with(['success'=> 'images upload successfuly!','portfolio'=>'active']);
    }

    public function deleteImage($id)
    {
        $portfolio_image = Portfolio::findOrFail($id);
        unlink($portfolio_image->image);
        $portfolio_image->delete();
    }
}
