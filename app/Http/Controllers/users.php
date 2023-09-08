<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    //
    function opration()
    {
        // Show Table
        // $data = DB::table('members')->get();
        // return view('datalist', ['members' => $data]);

        // Where Condition
        // return DB::table('members')
        // ->where('name','jigish')
        // ->get();

        // Find data
        // return (array)DB::table('members')->find(4);

        // Count Data
        // return DB::table('members')->count();

        // Insert Data
        // return DB::table('members')
        // ->insert([
        //     'name'=>'anil',
        //     'email'=>'email@gmil.com',
        //     'mobile'=>123123
        // ]);

        // Update Data
        // return DB::table('members')
        // ->where('id',4)
        // ->update([
        //     'name'=>'anil',
        //     'email'=>'email@gmil.com',
        //     'mobile'=>123123
        // ]);

        // Delete Data
        return DB::table('members')
        ->where('id',4)
        ->delete();
    }
}