<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TaskTeam;
use App\Member;
use App\Team;
use App\ListTeam;
use App\TaskHandle;
use App\Projectteam;

class TaskTeamController extends Controller
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
        
        TaskTeam::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TaskTeam $TaskTeam,$team,$list,$project)
    {
        $project = Projectteam::where('id',$project)->first();
        $tim = Team::where('id',$team)->first();
        $lists = ListTeam::where('id_project',$list)->get();
        $handle = TaskHandle::all();
        $member = Member::where('id_team',$team)->get();
        return view('kanban.task.team.edit',compact('TaskTeam','tim','lists','handle','project','member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $status = ListTeam::select('nama')->where('id','=',$request->id_list)->first();
        $task = TaskTeam::find($id);
        $task->id_list = $request->id_list;
        $task->nama = $request->nama;
        $task->deskripsi = $request->deskripsi;
        $task->taskstart = $request->taskstart;
        $task->taskend = $request->taskend;
        $task->status = $status->nama;
        $task->update();
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
