<?php

namespace App\Http\Controllers;

use App\tb_list;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListsController extends Controller
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
        tb_list::create($request->all());

        return back();
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\List  $list
     * @return \Illuminate\Http\Response
     */
    public function show(tb_list $list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\List  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_list $list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_list  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_list $list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_list  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_list $list)
    {
        //
    }
}
