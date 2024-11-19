<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
 use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;  


class UserController extends Controller

{
    public function register(Request $request)
    {
        $request->validate([
    
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $user = New Usermodel;

 $user->username=$request['username'];
 $user->password=$request['password'];
$user->save();
 
       
            return redirect('/');
       
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
    
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('username',$request['username'])->first();
        if($user && $request['password']=== $user->password){
            Auth::login($user);
                    return  redirect('/booking');

        }else{
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
