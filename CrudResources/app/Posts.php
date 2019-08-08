<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['region', 'city', 'province', 'barangay'];
    protected $dates = ['created_at', 'updated_at'];
}
