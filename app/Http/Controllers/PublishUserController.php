<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importing Auth Session
use Illuminate\Support\Facades\Input;
use App\User;


class PublishUserController extends Controller
{
    //
   public function editUser()
    {

        return view('admin.user-profile')->with('user', Auth::user());
    }

    public function updateUser(Request $request)
    {
    	$users = Auth::user();
    	$user = User::find($users->id);
        
         $fileName = 'null';
	    if (Input::file('profile_pic')->isValid()) {
	        $destinationPath = public_path('uploads');
	        $extension = Input::file('profile_pic')->getClientOriginalExtension();
	        $fileName = uniqid().'.'.$extension;

	        Input::file('profile_pic')->move($destinationPath, $fileName);
	    } 


      // dd($request);
       $user->name = $request->get('name');
       $user->email = $request->get('email');
       $user->designation = $request->get('designation');
       $user->profile_pic = $fileName;
       
       $user->save();
       
       return view('admin.user-profile');

            
    }
}
