<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $fillable = ['name'];
    protected $primeryKey = 'id';
	public function province(){
    	return $this->hasMany(Province::class);
    }
}