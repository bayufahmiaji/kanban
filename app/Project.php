<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','id_user']; 

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function team(){
        return $this->belongsTo('App\Team');
    }
    public function list(){
        return $this->hasMany('App\tb_list');
    }
}
