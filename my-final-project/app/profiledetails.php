<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profiledetails extends Model
{
    protected $table="profile";
    protected $fillable=['university','lives','interested'];
}
