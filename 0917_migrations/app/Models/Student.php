<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = 
    ['name','email', 
    'birth_date','average_grade'];

    public function school_class(){
        return $this->belongsTo(School_class::class);
    }
}
