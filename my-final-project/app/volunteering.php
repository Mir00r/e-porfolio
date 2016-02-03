<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class volunteering extends Model
{
    protected $table="volun";
    protected $fillable=['name','role','reason','date','description'];
}
