<?php

namespace App\Http\Controllers;
use Illuminate\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index(){
        $Bus = Bus::all();
        
      return view('Bus.index', compact('Bus'));
      
    }


    public function add()
    {
        return view('Bus.add');
    }

    public function edit()
    {
        return view ('Bus.edit');
    }

    public function show()
    {
        return view ('Bus.show');
    }
    

}
