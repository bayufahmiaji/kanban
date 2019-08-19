<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Controllerkanbanproject extends Controller
{
    public function project(){
        return view('kanban/project');
    }

    public function team(){
        return view('kanban/team');
    }
}
