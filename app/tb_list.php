<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_list extends Model
{
    protected $table='tb_list';
    protected $fillable = ['nama','id_project']; 

    public function project(){
        return $this->belongsTo('App\project');
    }
    public function task(){
        return $this->hasMany('App\Task');
    }
}
