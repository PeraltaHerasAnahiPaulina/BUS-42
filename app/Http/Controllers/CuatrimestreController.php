<?php

namespace App\Http\Controllers;
use Illuminate\Models\Cuatrimestre;
use Illuminate\Http\Request;

class CuatrimestreController extends Controller
{
    public function index(){
        return view ('Cuatrimestre.index');
    }


    public function add()
    {
        return view('Cuatrimestre.add');
    }

    public function edit()
    {
        return view ('Cuatrimestre.edit');
    }

    public function show()
    {
        return view ('Cuatrimestre.show');
    }

}
