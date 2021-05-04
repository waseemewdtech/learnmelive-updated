<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use App\User;
use App\Role;
use Yajra\DataTables\DataTables;
use Auth;

class UserController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->ajax()){
            $users = User::with('roles')->get();
            // return view('admin.users.index',compact('users'));
             return Datatables::of($users)->addColumn('edit',function($users){
                        if(Auth::user()->can('user.userUpdate')){
                            $button = '<a href="/admin/users/'.encrypt($users->id) .'/edit"  class="roles-delete" type="button" >
                                        <i class="material-icons blue-text">edit</i>
                                    </a>';
                            return $button;
                        }
                })->addColumn('delete',function($users){
                    if(Auth::user()->can('user.userDelete')){
                            $button =  '&nbsp;<a href="/admin/users/'. $users->id .'/edit" class="roles-delete"  id="'.$users->id.' type="button">
                                        <i class="material-icons red-text ligthen-3">delete</i>
                                    </a>';
                            return $button;
                    }
                })
                ->addColumn('roles', function (user $user) {
                return $user->roles->pluck('name')->implode(' ');
             })->rawColumns(['edit','delete','roles'])
             ->make(true);
            // return Datatables::of($data)
            //         ->addIndexColumn()
            //         ->make(true);
        }
        return view('admin.users.index');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    // store user from admin
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(),[
            'first_name'=>'required | string | max:20',
            'last_name'=>'required | string | max:20',
            'email'=>'required | email | unique:users',
            'password'=>'required | min:6',
            'status'=>'required',
            'user_type'=>'required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->exceptInput('password');
        }

        $user = new User;
        $user->user_type = $request->user_type;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->status = $request->status;
        if ($user->save())
        {
            return redirect()->route('users.index')->withMessage('User has been added successfully');
        }
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::where('id',decrypt($id))->first();
        return view('admin.users.edit',compact('users','roles'));
    }

   
    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(),[
            'first_name'=>'required | string | max:20',
            'last_name'=>'required | string | max:20',
            'status'=>'required',
            'roles'=>'required'
        ]);

        if($validations->fails())
        {
            return back()->withErrors($validations)->exceptInput('password');
        }

        $user = User::find($id);
        $user->fill($request->all());
        $user->roles()->sync($request->roles);
        if ($user->save())
        {
            return redirect()->route('users.index')->withMessage('User has been updated successfully');
        }
    }

    public function destroy($id)
    {
        if(user::where('id',$id)->delete())
        {
            return redirect()->route('users.index')->withMessage('User has been deleted successfully');
        }
    }

    public function userApproved($id)
    {
        return decrypt($id);
    }

    public function usernameCheck(Request $request)
    {
        if(User::where('username',$request->username)->where('email',$request->email)->first() !=null)
        {
            return response()->json(['status'=>false,'errors'=>['Username'=>$request->username,'Email'=>$request->email]]);
        }
        else if(User::where('username',$request->username)->first() !=null)
        {
            return response()->json(['status'=>false,'errors'=>['Username'=>$request->username]]);
        }
        else if(User::where('email',$request->email)->first() !=null)
        {
            return response()->json(['status'=>false,'errors'=>['Email'=>$request->email]]);
        }
        else
        {
            return response()->json(['status'=>true]);
        }
    }
}
