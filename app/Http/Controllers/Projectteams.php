<?php

namespace App\Http\Controllers;

use App\Projectteam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ListTeam;
use App\Team;
use App\TaskTeam;

class Projectteams extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Projectteam::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projectteam  $projectteam
     * @return \Illuminate\Http\Response
     */
    public function show(Projectteam $projectteam,$team)
    {
        $teams = Team::where('id',$team)->first();
        $lists = ListTeam::all();
        $result = TaskTeam::all();
        return view('kanban.project.team.index',compact('projectteam','lists','result','teams'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projectteam  $projectteam
     * @return \Illuminate\Http\Response
     */
    public function edit(Projectteam $projectteam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projectteam  $projectteam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projectteam $projectteam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projectteam  $projectteam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projectteam $projectteam)
    {
        //
    }
}
