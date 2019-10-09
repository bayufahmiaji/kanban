<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table='task';
    protected $fillable = ['nama','id_list','deskripsi'];

    public function list(){
        return $this->belongsTo('App\tb_list');
    }
}
