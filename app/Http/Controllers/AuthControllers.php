<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControllers extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function loginPost(Request $request){
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credetials)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back();
        }
    }
    public function showRegisterForm()
    {
        return view('admin.register');
    }
    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.login');
    }

}
