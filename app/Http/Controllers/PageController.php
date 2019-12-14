<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Project;
use App\Team;
use App\Projectteam;

class PageController extends Controller
{
    // public function home(){
    //     return view('index');
    // }

    // public function tenant(){
    //     return view('tenant');
    // }
    
    // public function Inkubator(){
    //     return view('inkubator');
    // }

    // public function hilirisasi(){
    //     return view('hilirisasi');
    // }

    // public function layanan(){
    //     return view('layanan');
    // }

    public function kanban(){
        $user = Auth::user()->id;
        $team = Team::where('id_user','=',$user)->first();
        $countTP = Projectteam::where('id_tim','=',$team->id)->count();       
        $countp = Project::where('id_user','=',$user)->count();
        $countT = Team::where('id_user','=',$user)->count();
        
        return view('kanban/kanbanhome',compact('countp','countT','countTP'));
    }
    private function user(){
        return Auth::user()->id;
    }

    // public function pengaturan(){
    //     return view('pengaturan');
    // }
}
