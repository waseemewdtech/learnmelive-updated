<?php

namespace App\Http\Controllers;

use App\Models\Specialists\Service;
use App\Specialist;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category_specialists($id)
    {
        $specialists = Specialist::where('category_id',$id)->get();
        return view('frontend.category_specialist',compact('specialists'));
    }

    public function search(Request $request)
    {
        $users = User::where('user_type', 'specialist')
        ->Where('name', 'like', '%' . $request->search . '%')->orWhere('username', 'like', '%' . $request->search . '%')->get();
        $services = Service::where('title', 'like', '%' . $request->search . '%')->get();
        return view('frontend.search',compact('users','services'));

    }
}
