<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('kanban/kanbanhome');
    }

    // public function pengaturan(){
    //     return view('pengaturan');
    // }
}
