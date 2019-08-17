<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $tabel = 'cities';
    protected $fillable = ['c_name', 'province'];
}
