<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cities extends Model
{
    protected $tabel = 'cities';
    protected $fillable = ['name', 'province_id', 'region_id'];
    protected $primaryKey = 'id';
    //use \Awobaz\Compoships\Compoships;
    public function province(){
    	return $this->belongsTo(Province::class);
    }
    public function barangays(){
    	return $this->hasMany(Barangays::class);
    }
}
