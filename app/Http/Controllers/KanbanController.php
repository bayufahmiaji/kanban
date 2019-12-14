<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\DB;
use App\User;
use App\Team;
use App\Member;
use Auth;

class KanbanController extends Controller
{
    public function project(){
        return view('kanban/project');
    }

    public function team(){
        $team = Team::all();
        $members = Member::all();

        return view('kanban/team/team',compact('team','members'));
    }

    public function home(){
        
        return view ('kanban/kanbanhome')->with->alert('Selamat Datang!');
        
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
