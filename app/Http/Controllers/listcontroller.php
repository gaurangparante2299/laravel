<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class listcontroller extends Controller
{
    //
    function show()
    {
        // echo "hello from cont";
        $data = Employee::paginate(5);
        return view('list', ['emp' => $data]);
    }
}