<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class deletecontroller extends Controller
{
    //
    function list()
    {
        $data = Member::all();
        $data = Member::orderBy("id", "asc")->get();
        return view('delete', ['members' => $data]);
    }

    function delete($id)
    {
        $data = Member::find($id);
        $data->delete();
        return redirect('list2');
    }

    function showdata($id)
    {
        $data = Member::find($id);
        return view('edit', ['data' => $data]);
    }

    function update(Request $req)
    {
        $data = Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->mobile=$req->mobile;
        $data->save();
        return redirect('list2');
    }
}