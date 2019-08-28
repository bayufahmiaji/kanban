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
            return view ('kanban/kanbanhome');
        }
    }
    public function login(){
        return view('kanban/kanbanlogin');
    }
    public function register(){
        return view('kanban/kbregister');
    }
    public function coba(){
        return view('kanban/task/coba');
    }

    
}
