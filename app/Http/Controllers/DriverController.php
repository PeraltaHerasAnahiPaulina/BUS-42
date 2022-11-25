<?php

namespace App\Http\Controllers;
use Illuminate\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        return view ('Driver.index');
    }


    public function add()
    {
        return view('Driver.add');
    }

    public function edit()
    {
        return view ('Driver.edit');
    }

    public function show()
    {
        return view ('Driver.show');
    }  
}
