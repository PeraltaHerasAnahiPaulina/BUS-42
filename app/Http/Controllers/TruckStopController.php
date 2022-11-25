<?php

namespace App\Http\Controllers;
use App\Models\TruckStop;
use Illuminate\Http\Request;

class TruckStopController extends Controller
{
    public function index(){
        $TruckStop = TruckStop::all();
        //return $user
        return view ('TruckStops.index', compact('TruckStop'));
    }


    public function add()
    {
        return view('TruckStop.add');
    }

    public function edit()
    {
        return view ('TruckStop.edit');
    }

    public function show()
    {
        return view ('TruckStop.show');
    } 
}