<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangays extends Model
{
    protected $tabel = 'barangays';
    protected $fillable = ['name', 'cities_id', 'province_id', 'region_id'];
    protected $primaryKey = 'id';
    public function cities(){
    	return $this->belongsTo(Cities::class);
    }
}
