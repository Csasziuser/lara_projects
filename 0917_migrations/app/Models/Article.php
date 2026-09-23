<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = 
    ['author_id','title', 
    'content','views',
    'is_published', 'published_at'];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
