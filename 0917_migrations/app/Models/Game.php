<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'genre', 'price', 'is_multi'];

    public function gamers(){
        return $this->belongsToMany(Gamer::class)->withPivot('is_discounted', 'hours');
    }
}
