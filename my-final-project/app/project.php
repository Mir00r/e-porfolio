<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $table='projects';
    

    protected $fillable=['title','supervisor','url','pmember','date','description'];
}
