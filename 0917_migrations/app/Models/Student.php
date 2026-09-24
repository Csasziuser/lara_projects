<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['school_class_id', 'name', 'email', 'birth_date', 'avarage_grade'];

    public function school_class(){
        return $this->belongsToMany(School_class::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class)
            ->withPivot('enrollment_date','grade')
            ->withTimestamps();
    }
}
