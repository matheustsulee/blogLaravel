<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'subtitle', 'content', 'tag', 'category_id', 'date_hour', 'img', 'link'];

    public function category(){
     
        return $this->belongsTo(Category::class);
    }
}
