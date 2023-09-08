<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usercontroller2 extends Controller
{
    //
    function operation()
    {
        // Get Data
        // return DB::table('members')->get();

        // Get Sum
        // return DB::table('members')->sum('id');

        // Get Min value
        // return DB::table('members')->min('id');

        // Get max value
        // return DB::table('members')->max('email');

        // Get max value
        return DB::table('members')->average('id');
    }
}
