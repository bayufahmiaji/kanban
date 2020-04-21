<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table='task';
    protected $guarded = [];

    public function list(){
        return $this->belongsTo('App\tb_list');
    }
}
