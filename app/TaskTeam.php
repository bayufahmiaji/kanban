<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskTeam extends Model
{
    protected $table = "tasksteam";

    protected $fillable = ['nama','id_list','deskripsi','taskhandle','taskstart','taskend','status'];

    public function listteam(){
        return $this->belongsTo('App\ListTeam');
    }
    public function taskhandle(){
    	return $this->hasMany('App\TaskHandle');
    }
}
