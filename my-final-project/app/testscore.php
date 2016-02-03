<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testscore extends Model
{
    protected $table="score";
    protected $fillable=['name','insname','score','date','description'];
}
