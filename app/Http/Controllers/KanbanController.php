<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\DB;
use App\User;
use Auth;

class KanbanController extends Controller
{
    public function project(){
        return view('kanban/project');
    }

    public function team(){
        return view('kanban/team');
    }

    public function home(){
        if(Auth::check()){
            $user = User::all();
            return view ('kanban/kanbanhome',compact('user'));
        }
    }
    public function login(){
        return view('kanban/kanbanlogin');
    }
    public function register(){
        return view('kanban/kbregister');
    }

    
}
