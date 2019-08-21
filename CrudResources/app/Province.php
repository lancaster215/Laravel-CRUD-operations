<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    protected $fillable = ['name','region_id'];
    protected $primaryKey = 'id';
    public function region(){
    	return $this->belongsTo(Province::class);
    }
    //use \Awobaz\Compoships\Compoships;
    public function cities(){
    	return $this->hasMany(Cities::class);
    }
}
