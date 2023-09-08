<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\user;

class Usercontroller extends Controller
{
    // function show($id)
    // {
    //     return $id;
    // }
    function show($user)
    {
        return view("users", ["name" => $user]);
    }

    function hello()
    {
        $data = ['gaurang', 'bhavesh', 'amit'];
        return view("gaurang", ["users" => $data]);
    }

    function get_data(Request $request)
    {
        // echo "form";
        $request->validate([
            'username' => 'required | max:10',
            'password' => 'required | min:6'
        ]);
        return $request->input();
    }

    // DB connection here
    function index()
    {
        return DB::select('select * from users');
    }

    // DB Connection Using Model
    function getdata()
    {
        return User::all();
    }

    // Example of HTTP Client
    function index_data()
    {
        // echo "API Call will here";
        $data = Http::get("https://reqres.in/api/users?page=2");
        return view('hello', ['collection' => $data['data']]);
    }

    // HTTP request Methods
    function testreq(Request $req)
    {
        // echo "submitted";
        return $req->input();
    }

    // Session Handler
    function userlogin(Request $req)
    {
        $data = $req->input('username');
        $req->session()->put('username', $data);
        // echo session('username');
        return redirect('profile');
    }

    // Flash session
    function store(Request $req)
    {
        $data = $req->input('username');
        $req->session()->flash('username', $data);
        return redirect('store');
    }

    // File upload function 
    function fileupload(Request $req)
    {
        return $req->file('image')->store('img');
    }
}