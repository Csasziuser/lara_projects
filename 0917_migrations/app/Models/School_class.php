<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School_class extends Model
{
    protected $fillable = 
    ['name', 'class_number', 
    'homeroom_teacher'];

    public function students(){
        return $this->hasMany(Student::class);
    }
}
