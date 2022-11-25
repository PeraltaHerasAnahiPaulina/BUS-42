<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        
     /* consulta eloquent larvavel */
     $Users = User::all();
        //return $user
        return view ('Users.index', compact('Users'));
    }

   // public function create(){
     //   return view('Users.add')
    //}
    
    public function store(Request $request)
    {
        return view('User.add');
    }

    public function edit()
    {
        return view ('User.edit');
    }

    public function show($ID)
    {
        //$User = Users::find('ID');

       // return User;
      //  return view ('User.show');
    } 
}
