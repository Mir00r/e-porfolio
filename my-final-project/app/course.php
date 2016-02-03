<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table="courses";

    protected $fillable=['title','code','associated'];
}