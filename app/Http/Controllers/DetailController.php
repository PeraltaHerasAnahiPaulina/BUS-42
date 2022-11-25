<?php

namespace App\Http\Controllers;
use Illuminate\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
        return view ('Detail.index');
    }


    public function add()
    {
        return view('Detail.add');
    }

    public function edit()
    {
        return view ('Detail.edit');
    }

    public function show()
    {
        return view ('Detail.show');
    }
}
