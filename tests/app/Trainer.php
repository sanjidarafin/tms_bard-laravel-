<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
     protected $fillable = ['name','gender','educational_qualification', 'previous_experience', 'date_of_birth','cell_number','email','country','filePath','skill_set','slug','status','courses','course_id'];
    
    
    public function courses()
    {
        return $this->hasMany('App\Course','course_id');
    }
}

