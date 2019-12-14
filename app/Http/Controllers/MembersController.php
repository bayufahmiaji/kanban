<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use App\Team;
use App\TaskHandle;   
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
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
        $id_team = $request->id_team;
        $query = $request->email;
        $id_user = User::select('id')->where('email', 'LIKE', "%{$query}%")->first();
        $nama = User::select('name')->where('email', 'LIKE', "%{$query}%")->first();
        $email = User::select('email')->where('email', 'LIKE', "%{$query}%")->first();
        $phone = User::select('phone')->where('email', 'LIKE', "%{$query}%")->first();
        $address = User::select('address')->where('email', 'LIKE', "%{$query}%")->first();
        $nama = User::select('name')->where('email', 'LIKE', "%{$query}%")->first();

        $member = new Member;
        $member->name = $nama->name;
        $member->id_user = $id_user->id;
        $member->id_team = $id_team;
        $member->email = $email->email;
        $member->phone = $phone->phone;
        $member->address = $address->address;

        $member->save(); 
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member,$team)
    {
        $teams   = Team::where('id',$team)->first();
        $handle = TaskHandle::all();
        return view('kanban.member.show',compact('member','teams','handle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete($member);
        return back();
    }
    
}
