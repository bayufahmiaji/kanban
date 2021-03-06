<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name','id_user','id_team','phone','address'];
    
    public function team(){
        return $this->belongsTo('App\Team');
    }
    
}
