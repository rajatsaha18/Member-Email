<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function loginShow()
    {
        return view('website.auth.login-show');
    }
    public function login(Request $request)
    {
       $credentials = $request->only('email', 'password');
       if(Auth::attempt($credentials))
       {
        $user = Auth::user();
        if($user->status == 'approved')
        {
            return redirect()->route('dashboard.user');
        }
        else
        {
            Auth::logout();
            return redirect()->route('login.show');
        }

       }
       return redirect()->route('login.show');

    }
    public function userDashboard()
    {
        return view('user-dashboard');
    }
    public function submitForm(Request $request)
    {
        $member = new User();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->password = $request->password;
        $member->save();
        return redirect()->back();
    }
}
