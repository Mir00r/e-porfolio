<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    protected $table="publications";
    protected $fillable=['title','publisher','url','auther','date','description'];
}
