<?php

namespace App\Http\Controllers;
use Illuminate\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index(){
        return view ('Center.index');
    }


    public function add()
    {
        return view('Center.add');
    }

    public function edit()
    {
        return view ('Center.edit');
    }

    public function show()
    {
        return view ('Center.show');
    }
    
}
