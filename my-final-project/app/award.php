<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class award extends Model
{
    protected $table="awards";
    protected $fillable=['title','organization','issuar','description'];
}
