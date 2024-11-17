<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    private $mailBody;
    public function dashboard()
    {
        $members = User::where('status','pending')->get();
        return view('dashboard.index',compact('members'));
    }
    public function edit($id)
    {
        $member = User::find($id);
        return view('dashboard.edit',compact('member'));
    }
    public function memberApproved(Request $request,$id)
    {
        $member = User::find($id);
        $member->status = 'approved';
        $member->save();

        /*==================Mail Send code===============*/
        $this->mailBody = [
            'title' => 'This is mail title',
            'body' => 'This is mail body',

        ];
        Mail::to($member->email)->send(new OrderConfirmationMail($this->mailBody));
        /*==================Mail Send code===============*/
        return redirect()->route('dashboard.user');

    }
}
