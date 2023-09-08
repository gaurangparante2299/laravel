<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Employeecontroller extends Controller
{
    //
    function getdata()
    {
        return DB::table('employees')
        ->join('company','employees.id','=','company.e_id')
        ->select('company.c_name','employees.name')
        ->where('employees.id','2')
        ->get();
    }
}
