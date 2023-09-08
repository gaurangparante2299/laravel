<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class addmembercontroller extends Controller
{
    //
    function add(Request $req)
    {
        // return view('addmember');
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->mobile = $req->mobile;
        $member->save();
        return redirect('addmember');
    }
}