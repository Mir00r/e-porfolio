<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certification extends Model
{
    protected $table="certifications";
    protected $fillable=['name','authority','license','url','date'];
}
