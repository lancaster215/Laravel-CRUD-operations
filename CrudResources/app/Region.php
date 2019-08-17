<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $fillable = ['r_name'];

    public function province(){
    	return $this->hasMany('Province', 'r_id','region');
    }
}
