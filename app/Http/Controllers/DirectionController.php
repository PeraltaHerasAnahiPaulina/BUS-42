<?php

namespace App\Http\Controllers;
use Illuminate\Models\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function index(){
        return view ('Direction.index');
    }


    public function add()
    {
        return view('Direction.add');
    }

    public function edit()
    {
        return view ('Direction.edit');
    }

    public function show()
    {
        return view ('Direction.show');
    } 
    
}
