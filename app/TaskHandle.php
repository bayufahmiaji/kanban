<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskHandle extends Model
{
    protected $table = "taskhandles";
    protected $fillable = ['nama_user','id_task','id_user','id_project','nama_project'];

    public function task(){
        return $this->belongsTo('App\TaskTeam');
    }
}
 
