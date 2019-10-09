<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','id_user','name_user'
    ];
    public function member(){
        return $this->hasMany('App\Member');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function project(){
        return $this->belongsTo('App\Project');
    }
}
