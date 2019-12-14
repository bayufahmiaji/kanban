<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projectteam extends Model
{
    protected $fillable = ['nama','id_tim']; 
    public function Team(){
        return $this->belongsTo('App\Team');
    }
}
