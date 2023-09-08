<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class membercontroller extends Controller
{
    //
    function showlist()
    {
        // return view('list1');
        $data = Member::paginate(5);
        return view('list1', ['member' => $data]);
    }
}