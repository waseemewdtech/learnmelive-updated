<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Specialist;
use App\Client;
use App\PaymentInfo;
use App\AvailableTime;
use App\Category;
use App\ServiceCategory;
use App\Mail\SpecialistWelcomeMail;
use App\Mail\AdminApprovalMail;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $arr = [
                'username' => ['bail','required', 'unique:users'],
                'first_name' => ['bail','required', 'string'],
                'last_name' => ['bail','required', 'string'],
                'phone' => ['bail','required', 'string'],
                'email' => ['bail','required', 'string', 'email', 'max:255', 'unique:tb_user'],
                'password' => ['bail','required', 'string', 'min:6', 'confirmed'],
                'country' => ['bail','required'],
            ];

        // if ($data['user_type']=='specialist')
        // {
            
        //     $arr['avatar'] = ['bail','required'];
        //     $arr['payment_method'] = ['bail','required'];
        //     $arr['business_phone'] = ['bail','required', 'string'];
        //     $arr['languages'] = ['required'];
        //     $arr['description'] = ['bail','required', 'string'];
        // }
        // else if($data['user_type']=='client')
        // {
        //     $arr['client_phone'] =['bail','required', 'string'];
        // }

        if($data['payment_method']=='stripe' && $data['user_type'] !='buyer')
        {
            $arr['payment_first_name'] = ['bail','required', 'string'];
            $arr['payment_last_name'] = ['bail','required', 'string'];
            $arr['account_number'] = ['bail','required'];
            $arr['payment_birth_date'] = ['bail','required'];
            $arr['routing_number'] = ['bail','required'];

        }
        else if($data['payment_method']!='stripe' && $data['user_type'] !='client')
        {
            $arr['payment_email'] = ['bail','required', 'string', 'email', 'max:255'];
        }

        return Validator::make($data, $arr);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();

        // $profileImage = $request->file('avatar');
        if($request->hasFile('avatar'))
        {
            $profile_image_original_name =  $request->file('avatar')->getClientOriginalName();
            $image_changed_name = time().'.'.$request->file('avatar')->extension();
            $request->file('avatar')->move('public/uploads/user/', $image_changed_name);
            $avatar_url = url('/uploads/user')."/".$image_changed_name;
        }
        else{ $avatar_url = ''; }
        $user = new User();
        $user->type=$data['user_type'];
        $user->username=$data['username'];
        $user->first_name=$data['first_name'];
        $user->last_name=$data['last_name'];
        $user->email=$data['email'];
        $user->country=$data['country'];
        $user->phone=$data['phone'];
        $user->password=Hash::make($data['password']);
        $user->picture=$avatar_url;
        if($data['user_type'] =='seller'){
            $user->description = $data['description'];
            $user->languages = implode(",",$data['languages']);
            $user->payment_type=$data['payment_method'];
            if($data['payment_method']=='stripe')
            {
                $user->ssn=$data['payment_ssn'];
            }
        }
        $user->save();
        if($data['user_type'] =='seller'){
            $payment = new PaymentInfo();
            $payment->user_id = $user->id;
            if($data['payment_method']=='stripe'){
                $payment->first_name = $data['payment_first_name'];
                $payment->last_name = $data['payment_last_name'];
                $payment->dob = $data['payment_birth_date'];
                $payment->ssn = $data['payment_ssn'];
                $payment->account_number = $data['account_number'];
                $payment->routing_number = $data['routing_number'];
            }else{
                $payment->email = $data['payment_email'];
            }
            $payment->save();

            if(count(explode(',',$data['days'])) >0)
            {
                date_default_timezone_set(config('app.timezone'));
                foreach(['mon','tue','wed','thr','fri','sat','sun'] as  $key => $value){
                    if(in_array($value,explode(',',$data['days']))){
                        $hours_arr[$value] = strtotime($data[$value.'_from'])*1000.'~'.strtotime($data[$value.'_to']*1000);
                    }else{
                        $hours_arr[$value] = 'Closed';
                    }
                }
                $hours_arr['user_id'] = $user->id;
                AvailableTime::create($hours_arr);
            }
            $category = Category::find($data['sub_category_id']);
            $serviceCategory= new ServiceCategory();
            $serviceCategory->user_id = $user->id;
            $serviceCategory->category_id = $category->id;
            $serviceCategory->name = $category->title;
            $serviceCategory->save();
            Mail::to($data['email'])->send(new SpecialistWelcomeMail(['name'=>$data['first_name']." ".$data['last_name'],'message'=>'Profile submitted successfully. We will contact you via email (ASAP) when approved!']));
            Mail::to(config('app.mail_from'))->send(new AdminApprovalMail(['name'=>$data['first_name']." ".$data['last_name'],'email'=>$data['email'],'message'=>'Profile '.$data['username'].' submitted successfully. Please Approved it']));
        }
        // $user = User::create([
        //     'type' => $data['user_type'],
        //     'username' => $data['username'],
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'email' => $data['email'],
        //     'country' => $data['country'],
        //     'phone' => $data['phone'],
        //     'password' => Hash::make($data['password']),
        //     'picture'=> $avatar_url
        // ]);
        
        // c
        // {
        //     if(count(explode(',',$data['days'])) >0)
        //     {
        //         foreach (explode(',',$data['days']) as $key => $value)
        //         {
        //             $hours_arr[$value] = [$data[$value.'_from'],$data[$value.'_to']];
        //             // if($value =="saturday" || $value=='sunday')
        //             // {
        //             //     $hours_arr[$value] = ['closed'];
        //             // }
        //             // else
        //             // {
        //             //     $hours_arr[$value] = [$data[$value.'_from'],$data[$value.'_to']];
        //             // }
                   
        //         }
        //     }

        //     $specialist = new Specialist();
        //     $specialist->user_id = $user->id;
        //     $specialist->category_id = $data['category_id'];
        //     $specialist->sub_category_id = json_encode($data['sub_category_id']);
        //     $specialist->business_phone = $data['business_phone'];
        //     $specialist->description = $data['description'];
        //     $specialist->languages = json_encode($data['languages']);
        //     $specialist->public_profile = $data['public_profile'];
        //     $specialist->payment_method = $data['payment_method'];
        //     if($data['payment_method']=='stripe' && $data['user_type'] !='client')
        //     {
        //         $specialist->payment_first_name = $data['payment_first_name'];
        //         $specialist->payment_last_name = $data['payment_last_name'];
        //         $specialist->payment_birth_date = $data['payment_birth_date'];
        //         $specialist->payment_ssn = $data['payment_ssn'];
        //         $specialist->account_number = $data['account_number'];
        //         $specialist->routing_number = $data['routing_number'];

        //     }
        //     else if($data['payment_method']!='stripe' && $data['user_type'] !='client')
        //     {
        //         $specialist->payment_email = $data['payment_email'];
        //     }
        //     $specialist->opening_hours = json_encode($hours_arr);
        //     if($specialist->save())
        //     {
        //         // config('app.mail_from'),config('app.mail_from_name')
        //         Mail::to($data['email'])->send(new SpecialistWelcomeMail(['name'=>$data['name'],'message'=>'Profile submitted successfully. We will contact you via email (ASAP) when approved!']));
        //         Mail::to(config('app.mail_from'))->send(new AdminApprovalMail(['name'=>$data['name'],'email'=>$data['email'],'message'=>'Profile '.$data['username'].' submitted successfully. Please Approved it']));

        //     }
        // }
        // else if($data['user_type'] =='client')
        // {
        //     $client = new Client();
        //     $client->user_id = $user->id;
        //     $client->business_phone = $data['client_phone'];
            
        //     $client->save();
        // }
        
        return $user;
    }

}
