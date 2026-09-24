<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gamer extends Model
{
    protected $fillable = ['name', 'email', 'username'];

    public function games(){
        return $this->belongsToMany(Game::class,)->withPivot('is_discounted','hours');
    }
}
