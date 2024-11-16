<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function userDashboard()
    {
        return view('user-dashboard');
    }
    public function submitForm(Request $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->save();
        return redirect()->back();
    }
}
