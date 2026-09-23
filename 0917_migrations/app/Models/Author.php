<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = 
    ['name','email',
    'bio','joined_at'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
