<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangays extends Model
{
    protected $tabel = 'barangays';
    protected $fillable = ['b_name', 'city'];
}
