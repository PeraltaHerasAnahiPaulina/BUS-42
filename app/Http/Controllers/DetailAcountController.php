<?php

namespace App\Http\Controllers;
use Illuminate\Models\DeatailAcount;
use Illuminate\Http\Request;

class DetailAcountController extends Controller
{
    public function index(){
        return view ('DetailAcount.index');
    }


    public function add()
    {
        return view('DetailAcount.add');
    }

    public function edit()
    {
        return view ('DetailAcount.edit');
    }

    public function show()
    {
        return view ('DetailAcount.show');
    }
}
