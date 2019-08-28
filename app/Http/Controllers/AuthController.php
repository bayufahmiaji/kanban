<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function postlogin(Request $request){

        if(Auth::attempt($request->only('email','password'))){
            return redirect('/kanban');
        }else{
            return redirect('/loginkanban')->with('GAGAL','Password atau Username Salah');
        }
    }

    public function create(Request $request){
        User::create($request->all());

        return redirect('/loginkanban');
    }

}
