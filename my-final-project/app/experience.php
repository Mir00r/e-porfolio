<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
   protected $table="experiences";

   protected $fillable=['name','role','address','duration','description'];
}
