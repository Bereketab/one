<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
class SettingController extends Controller
{
    public function edit()
    {
      if(Auth::user()){
        return view('updatepassword2');
      }
      else{
        return redirect()->back();
      }
    }
 
 
    public function update(Request $request)
    {
        if(!(Hash::check($request->get('oldpassword'), Auth::user()->password))){
          return back()->with('error','ooops!! pasword does not match');
        }
        if(Hash::check($request->get('oldpassword'), Auth::user()->password) && (strcmp($request->get('newpassword'),$request->get('password_confirmation'))==0)){
          $user_obj = Auth::user();
      $user_obj->password = bcrypt($request->get('newpassword'));
      $user_obj->save();
      return back()->with('error','Password Changed successfully');
        }
        if(strcmp($request->get('oldpassword'),$request->get('password_confirmation'))==0){
          return back()->with('error','ooops!!  old password again');
        }
        if(!(strcmp($request->get('newpassword'),$request->get('password_confirmation'))==0)){
          return back()->with('error','ooops!!  confirmation please re confirm');
        }
              
      }
}
