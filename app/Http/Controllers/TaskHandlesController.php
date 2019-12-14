<?php

namespace App\Http\Controllers;

use App\TaskHandle;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskHandlesController extends Controller
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
        $member = Member::where('id','=',$request->id_member)->first();

        $task = new TaskHandle;
        $task->nama_user = $member->name;
        $task->nama_project = $request->nama_project;
        $task->id_task = $request->id_task;
        $task->id_project = $request->id_project;
        $task->id_user = $member->id_user;
        $task->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskHandle  $taskHandle
     * @return \Illuminate\Http\Response
     */
    public function show(TaskHandle $taskHandle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskHandle  $taskHandle
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskHandle $taskHandle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskHandle  $taskHandle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskHandle $taskHandle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskHandle  $taskHandle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskHandle $taskHandle)
    {
        //
    }
}
