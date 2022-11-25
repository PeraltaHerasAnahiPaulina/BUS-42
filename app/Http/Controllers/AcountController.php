<?php

namespace App\Http\Controllers;
//MANDAMOS A LLAMAR A NUETRSO MODELO
use App\Models\Acount as ModelsAcount;
use App\Models\User;
use Illuminate\Models\Acount;
use Illuminate\Http\Request;
//mANDAMOS A LLAMAR LOS MODELOS CUANDO SE FOREIH KEY

class AcountController extends Controller
{
    
//public function create(){}


public function store(Request $request){
    return$request

    //CREAR OBJETO
    User = new User;
//obtenemos los datps de view add
    $user $ request->input('campo')
    $user $ request->input('campo')
    $user $ request->input('campo')
    $user $ request->input('campo')
    //guardamos los datos
    $user->save();
    return ('El usuario se guardo con exito');
}

    public function index(){
        return view ('Acount.index');

    $Acount=Acount::all();

    
    }


    public function add()
    {
        return view('Acount.add');
    }

    public function edit()
    {
        return view ('Acount.edit');
    }

    public function show()
    {
        return view ('Acount.show');
    }
}
