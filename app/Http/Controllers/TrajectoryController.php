<?php

namespace App\Http\Controllers;
use Illuminate\Models\Trayectory;
use Illuminate\Http\Request;

class TrajectoryController extends Controller
{
    public function index(){
        return view ('Trajectory.index');
    }


    public function add()
    {
        return view('Trajectory.add');
    }

    public function edit()
    {
        return view ('Trajectory.edit');
    }

    public function show()
    {
        return view ('Trajectory.show');
    }
}
