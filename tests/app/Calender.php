<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    protected $table="calenders";
    protected $fillable=['title','description','img'];
}
