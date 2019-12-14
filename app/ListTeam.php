<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTeam extends Model
{
    protected $table = "listteam";

    protected $fillable = ['nama','id_project']; 

    public function projectteam(){
        return $this->belongsTo('App\Projectteam');
    }
    public function taskteam(){
        return $this->hasMany('App\TaskTeam');
    }
}
